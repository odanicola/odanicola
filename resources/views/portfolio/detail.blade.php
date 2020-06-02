@extends('layouts.app')

@section('content')

<section class="masthead-page bg-primary">
    <div class="container">
        <div class="container d-flex align-items-center flex-column">
            
            <h1 class="masthead-heading mb-0 mt-3 text-white text-center">{{ $portfolio->title }}</h1>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0 text-white">{{ $portfolio->subtitle }} | {{ $portfolio->year }}</p>
        </div>
    </div>
</section>

<section class="portfoliodetail">
    <div class="container">
        <div class="row" id="portfolio_row">        
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <!-- Description -->
                        <h5 class="card-title">Description</h5>
                        <p class="card-text mt-2">{{ $portfolio->description }}{{ $portfolio->description }}</p>
                        <!-- Gallery -->
                        <h5 class="card-title">Gallery</h5>

                        <!--Carousel Wrapper-->
                        @if(count($portfolio->gallery) > 0)
                        
                        @foreach($portfolio->gallery as $key => $value)
                            <a href="{{ $value->url }}" rel="prettyPhoto" title="{{ $portfolio->title }}">
                                <img class="img-fluid" src="{{ $value->url }}" alt="{{ $portfolio->title }}">    
                            </a>
                            
                        @endforeach
                        @else 
                        <p>Tidak ada galeri.</p>
                        @endif
                        <!--/.Carousel Wrapper-->

                        <!-- Description -->
                        <h5 class="card-title">Technology</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="">
                                    <li>Codeigniter 2.0</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-2"></div> -->
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/g/jquery@2.2.4,jquery.owlcarousel@1.31"></script>
<script src="{{ asset('js/jquery-1.6.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script>
    var jQuery_1_6_1 = $.noConflict(true);
    jQuery_1_6_1("a[rel^='prettyPhoto']").prettyPhoto({
        theme:'light_rounded'
    });

    $("#header_text").text('{{ $portfolio->title }}')
</script>
@endsection