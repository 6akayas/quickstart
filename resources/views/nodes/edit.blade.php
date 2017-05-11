@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Add nodes to your Sitemap</h1>
            <form action="{{ action('NodesController@store', ['id' => $sitemap->id]) }}" method="POST" id="nodes-form">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <input type="hidden" name="sitemap-id" value="{{ $sitemap->id }}"/>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection