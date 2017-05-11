@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Create a Sitemap</h1>
            <form action="{{ action('SitemapsController@store') }}" method="post" id="sitemap-form">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="sitemap_add" name="title" placeholder="Name of Sitemap">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection