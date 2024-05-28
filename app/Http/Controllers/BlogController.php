<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // fungsi index
    public function index()
    {

        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    // halaman create
    public function create()
    {
        return view('admin.blog.create');
    }

    // halaman store
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:10000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'image wajib diisi!',
            'desc.required' => 'desc wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

         // Image
         $fileName = time() . '.' . $request->image->extension();
         $request->file('image')->storeAs('public/artikel', $fileName);

          # Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');


        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-fluid');
            }
        }

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'img' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('blog'))->with('success', 'data berhasil di simpan');

    }

    // halaman edit
    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);

    }
    // fungsi update
    public function update(Request $request,$id)
    {
        $artikel = Blog::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'img wajib diisi!',
            'desc.required' => 'desc wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/' . $artikel->img)) {
                \File::delete('storage/artikel/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->img->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-fluid');
            }
        }

        $artikel->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('blog'))->with('success', 'data berhasil di update');
    }
    // fungsi delete
    public function destroy($id)
    {

        $artikel = Blog::find($id);
        if (\File::exists('storage/artikel/' . $artikel->img)) {
            \File::delete('storage/artikel/' . $artikel->img);
        }

        $artikel->delete();

        return redirect(route('blog'))->with('success', 'data berhasil di hapus');
    }


}
