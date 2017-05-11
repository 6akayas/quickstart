<?php

namespace App\Http\Controllers;
use App\Models\Sitemap;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Models\Node;


class SitemapsController extends Controller
{
    public function index()
    {
        $sitemaps = Sitemap::all();
        return view('sitemaps.index', ['sitemaps' => $sitemaps]);
    }

    public function create()
    {
        return view('sitemaps.create');
    }

    public function store(Request $request)
    {
        $sitemap = new Sitemap;
        $sitemap->title = $request->get('title');
        $sitemap->user_id = \Auth::id();
        $sitemap->save();

        return view('sitemaps.show', ['sitemap' => $sitemap ]);
    }

    public function show($id)
    {
        $sitemap = Sitemap::findOrFail($id);
        return view('sitemaps.show', ['sitemap' => $sitemap ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
