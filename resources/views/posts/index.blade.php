@extends('layouts.master')

@section('title', '所有文章')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <hr class="small">
                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <a href="{{route('posts.show',$post->id)}}">
                    <td style="text-align:center">
                        {{$post->id}}
                    </td>
                    <td>
                        {{$post->title}}
                        {{Str::limit($post->content,150)}} //顯示前150的內容
                    </td>
                    <td style="text-align:center">
                        {{($post->is_feature)? 'v' : 'x' }}
                    </td>
                        <a href = "{{ route('admin.posts.edit', $post->id) }}">
                           編輯
                        </a>
                </a>

                </tr>
            @endforeach

            @foreach(range(1, 5) as $id)
            <div class="post-preview">
                <a href="{{ route('posts.show', $id) }}">
                    <h2 class="post-title">
                        Post {{ $id }}
                    </h2>
                    <h3 class="post-subtitle">
                        Subtitle
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <hr>
            @endforeach
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
