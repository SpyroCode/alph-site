<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class GalleryController
 * @package App\Http\Controllers
 */
class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate();

        return view('gallery.index', compact('galleries'))
            ->with('i', (request()->input('page', 1) - 1) * $galleries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery = new Gallery();
        return view('gallery.create', compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required|image|max:1024',
        ]);
        $image = $request->file('file')->store('public/assets/img');
        $url = Storage::url($image);
        $count = Gallery::all()->where('is_active', true)->count();

        $gallery = Gallery::create([
            'name' => $request->input('name'),
            'image' => $url,
            'icon' => 'fa fa-camera camera',
            'index' => $count + 1
        ]);

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);

        return view('gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);

        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required|image|max:1024',
        ]);

        $image = $request->file('file')->store('public/assets/img');
        $url = Storage::url($image);

        $gallery->update([
            'name' => $request->input('name'),
            'image' => $url,
        ]);

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id)->delete();

        return redirect()->route('galleries.index')
            ->with('success', 'Gallery deleted successfully');
    }
}
