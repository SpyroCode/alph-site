<?php

namespace App\Http\Controllers;

use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

/**
 * Class WebsiteInfoController
 * @package App\Http\Controllers
 */
class WebsiteInfoController extends Controller
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
        $websiteInfos = WebsiteInfo::paginate();

        return view('website-info.index', compact('websiteInfos'))
            ->with('i', (request()->input('page', 1) - 1) * $websiteInfos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $websiteInfo = new WebsiteInfo();
        return view('website-info.create', compact('websiteInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(WebsiteInfo::$rules);

        $websiteInfo = WebsiteInfo::create($request->all());

        return redirect()->route('website-infos.index')
            ->with('success', 'WebsiteInfo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $websiteInfo = WebsiteInfo::find($id);

        return view('website-info.show', compact('websiteInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $websiteInfo = WebsiteInfo::find($id);

        return view('website-info.edit', compact('websiteInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  WebsiteInfo $websiteInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebsiteInfo $websiteInfo)
    {
        request()->validate(WebsiteInfo::$rules);

        $websiteInfo->update($request->all());

        return redirect()->route('website-infos.index')
            ->with('success', 'WebsiteInfo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $websiteInfo = WebsiteInfo::find($id)->delete();

        return redirect()->route('website-infos.index')
            ->with('success', 'WebsiteInfo deleted successfully');
    }
}
