@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <div class="row">
                <h2>Sitemaps:</h2>
            </div>
            <div class="row">
                <div class="link-content">
                    @foreach ($sitemaps as $sitemap)
                        <li><a href="/sitemaps/{{ $sitemap->id }}">Sitemap - {{ $sitemap->title }}</a></li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
