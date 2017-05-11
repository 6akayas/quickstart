<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SitemapsController;
use Illuminate\Http\Request;
use App\Models\Node;
use App\Models\Sitemap;

class NodesController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $sitemap = Sitemap::findOrFail($request->get('sitemap'));
        return view('nodes.create', ['sitemap' => $sitemap]);
    }

    public function store(Request $request)
    {
        $sitemap = Sitemap::findOrFail($request->id);
        $node = new Node;
        $node->name = $request->get('name');
        $node->description = $request->get('description');
        $node->sitemap_id = $request->get('sitemap-id');
        $node->save();
        return view('nodes.show', ['node' => $node ]);
    }

    public function show($id)
    {
        $node = Node::findOrFail($id);

        return view('nodes.show', ['node' => $node]);
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
