@extends('layouts.app')

@section('styles')
    <style type="text/css">
        .profile-image {
            background-color: rgba(0,0,0,0.2);
        }
        .social-media-links a {
            color: #666;
        }
        .social-media-links a:hover {
            color: #444;
        }
        .social-media-links {
            text-align: center;
            font-size: 24pt;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-2">
            {{-- Profile Image --}}
            <img src="/img/user/man.png" alt="No Profile Picture Uploaded" class="img-fluid profile-image rounded-circle p-1">
            {{-- Social Media Links --}}
            <p class="social-media-links text-muted">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-youtube-square"></i></a>
            </p>

        </div>
        <div class="col-sm-8">
            {{-- Profile Header --}}
            <h3>
                {{ Auth::user()->fullName }} 
                <small class="float-right text-muted">&commat;{{ Auth::user()->username }}</small>
            </h3>
            <hr>
            {{-- Contect --}}
            <p>Most Recent Activity</p>
        </div>
    </div>
</div>
@endsection
