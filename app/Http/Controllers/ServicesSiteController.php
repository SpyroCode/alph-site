<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class ServicesSiteController extends Controller
{
    public function index()
    {
        $id = null;
        $websiteInfos = WebsiteInfo::all()->where('index', 1);
        foreach ($websiteInfos as $value){
            $id = $value->id;
        }
        $galleries = Gallery::all()->where('is_active', true);
        $services = Service::all()->where('is_active', true);
        $socialNetworks = SocialNetwork::all()->where('is_active', true);
        $websiteInfo = WebsiteInfo::find($id);
        return view('services', compact('services', 'socialNetworks', 'websiteInfo'));
    }
}
