@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-8 col-md-offset-4">
            <h2>Sitemap: <a href="{{ action('SitemapsController@show', ['id' => $node->sitemap->id]) }}">{{ $node->sitemap->title }}</a></h2>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nodes</th>
                <th>Description</th>
                <th>Edit Nodes</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $node->name }}</td>
                <td>{{ $node->description }}</td>
                <td><a href="{{ action('NodesController@edit', ['id' => $node->id]) }}"><button type="submit" class="btn-default btn-md"> Edit</button></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection

