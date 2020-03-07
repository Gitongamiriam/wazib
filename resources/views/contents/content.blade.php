@extends('layouts.app')

@section('title', $title)

@section('body')
    <div class="row">
        {{-- card image --}}
        <div class="col-md-4" style="">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Images</h5>
                        <h3 class="card-title pt-2"><strong>Image Contents</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!.</p>
                        <a class="btn btn-info" href="{!! url('/images'); !!}"><i class="fas fa-image left"></i> View Contents</a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>

        {{-- card video --}}
        <div class="col-md-4" style="">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Images</h5>
                        <h3 class="card-title pt-2"><strong>Image Contents</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!.</p>
                        <a class="btn btn-info" href="{!! url('/images'); !!}"><i class="fas fa-image left"></i> View Contents</a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>

        {{-- card text --}}
        <div class="col-md-4" style="">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Images</h5>
                        <h3 class="card-title pt-2"><strong>Image Contents</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!.</p>
                        <a class="btn btn-info" href="{!! url('/images'); !!}"><i class="fas fa-image left"></i> View Contents</a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>

        {{-- card audio --}}
        <div class="col-md-4" style="">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
        
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h5 class="pink-text"><i class="fas fa-image"></i>Images</h5>
                        <h3 class="card-title pt-2"><strong>Image Contents</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                        Odit sed qui, dolorum!.</p>
                        <a class="btn btn-info" href="{!! url('/images'); !!}"><i class="fas fa-image left"></i> View Contents</a>
                    </div>
                </div>
        
            </div>
            <!-- Card -->
        </div>
    </div>
@endsection