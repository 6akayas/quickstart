@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-8 col-md-offset-4">
            <h2>Sitemap:</h2>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Sitemap</th>
                <th>Nodes</th>
                <th>Edit Sitemap</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $sitemap->title }}</td>
                <td><a href="{{ action('NodesController@create', ['sitemap' => $sitemap->id]) }}"><button type="submit" class="btn-default btn-md"> Add </button></a>
                </td>
                <td><a href="{{ action('SitemapsController@edit', ['sitemap' => $sitemap->id]) }}"><button type="submit" class="btn-default btn-md"> Edit</button></a>
                </td>
            </tr>
            </tbody>
        </table>


        @foreach($sitemap->nodes as $node)
            {{ $node->name }}
        @endforeach
    </div>

@endsection

