<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    public function showDataVideo()
    {
        $video = Video::all();
        return view('admin/gallery/video/data-video', compact('video'));
    }

    public function create(Request $request)
    {

        Alert::toast('Video Berhasil Ditambahkan!', 'success');
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori_video' => 'required|max:100',
            'gambar_thumbnail' => 'nullable|max:20000',
            'video_content' => 'required|max:30000',

        ]);
        $data = [];

        if ($request->has('gambar_thumbnail')) {
            $data = $request->all();
            $data['deskripsi'] = strip_tags($request->deskripsi);
            $data['user_id'] = Auth::id();
            $data['gambar_thumbnail'] = $request->file('gambar_thumbnail')->store('thumbnail');
            $data['video_content'] = $request->file('video_content')->store('video');
            Video::create($data);
        } else if ($request->has('video_content')) {
            $data = $request->all();
            $data['deskripsi'] = strip_tags($request->deskripsi);
            $data['user_id'] = Auth::id();
            $data['gambar_thumbnail'] = $request->file('gambar_thumbnail')->store('thumbnail');
            $data['video_content'] = $request->file('video_content')->store('video');
            Video::create($data);
        } else {
            $data = $request->all();
            $data['deskripsi'] = strip_tags($request->deskripsi);
            $data['user_id'] = Auth::id();

            Video::create($data);
        }

        return redirect()->back()->with('toast');
    }


    public function update(Request $request, $id)
    {
        Alert::toast('Video Berhasil Diubah!', 'success');
        $video = Video::find($id);
        if (empty($request->file('gambar_thumbnail'))) {

            $video = Video::find($id);
            $video->update([
                'judul' => $request->judul,
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_video' => $request->kategori_video,
                'video_content' => $request->file('video_content')->store('video')
            ]);
        } else if (empty($request->file('video_content'))) {
            $video = Video::find($id);
            $video->update([
                'judul' => $request->judul,
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_video' => $request->kategori_video,
                'gambar_thumbnail' => $request->file('gambar_thumbnail')->store('thumbnail'),
            ]);
        } else if ($video->video_content !== null) {
            $video = Video::find($id);
            Storage::delete($video->video_content);
            $video->update([
                'judul' => $request->judul,
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_video' => $request->kategori_video,
                'video_content' => $request->file('video_content')->store('video'),
                'gambar_thumbnail' => $request->file('gambar_thumbnail')->store('thumbnail')
            ]);
        } else {
            $video = Video::find($id);
            Storage::delete($video->gambar_thumbnail);
            $video->update([
                'judul' => $request->judul,
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_video' => $request->kategori_video,
                'gambar_thumbnail' => $request->file('gambar_thumbnail')->store('thumbnail'),
                'video_content' => $request->file('video_content')->store('video')
            ]);
        }
        return redirect()->back()->with('toast');
    }

    public function delete($id = null)
    {
        Alert::toast('Video Berhasil Dihapus!', 'success');

        $video = Video::find($id);

        if ($video->gambar_thumbnail) {
            Storage::delete($video->gambar_thumbnail);
            Video::where(['id' => $id])->delete();
        } else if ($video->video_content) {
            Storage::delete($video->video_content);
            Video::where(['id' => $id])->delete();
        } else {
            Video::where(['id' => $id])->delete();
        }

        return redirect()->back()->with('toast');
    }
}
