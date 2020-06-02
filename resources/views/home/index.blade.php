@extends('layouts.home')

@section('content')

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-primary mb-2">Portfolio</h2>
            <p class="page-section-subheading text-center mb-5">Check out all my portfolios i have been working on since 2013.</p>
            <!-- Icon Divider-->
            <!-- <div class="divider-custom">
                <div class="divider-custom-line"></div>
            </div> -->
            <!-- Portfolio Grid Items-->
            <div class="row" id="portfolio_row">
                
                @foreach($portfolio as $key => $value)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <a href="<?php echo url('portfolio/detail',['id'=> $value->id ])?>">
                        <div class="portfolio-item mx-auto">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white "><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            
                            <img class="image-card img-fluid" src="{{ $value->feature_image }}" alt="{{ $value->title }}" />
                        </div>
                        </a>
                        
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $value->title }}</h5>
                            <span class="card-subtitle">{{ $value->subtitle }} | {{ $value->year }} </span>
                            <p class="card-text mt-2">{{ $value->description }}</p>
                            <a href="<?php echo url('portfolio/detail',['id'=> $value->id ])?>" class="btn btn-primary"><i class="fas fa-eye"></i> See Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <div id="div_loadmore" style="display:none">
                        <p>Please wait...<br/>
                            <img style="width: 50px;" src="{{ asset('img/component/loader.gif') }}" alt="">
                        </p>
                    </div>
                    <button class="btn btn-secondary" id="btn_loadmore"><i class="fas fa-eye"></i> Load More</button>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-white mb-2">About</h2>
            <p class="page-section-subheading text-center mb-5">Here's a little story about me</p>
            <!-- Icon Divider-->
            
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto"><p class="lead">I'm a full stack developer with a focus on web development and mobile development especially hybrid mobile app. I'm hardworker, fast-leaner, and dedicated for all qualities i put forward in every project.</p></div>
                <div class="col-lg-4 mr-auto"><p class="lead">Prefer to work in Bandung and with English environment to build my self becoming a professional web development guy.</p></div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="{{ route('home.download') }}"><i class="fas fa-download mr-2"></i>Download CV</a>
            </div>
        </div>
    </section>
    
    <script>
        var pageNumber = 2

        $("#btn_loadmore").on('click', function () {
            loadMore()
        })

        const loadMore = () => {
            $("#div_loadmore").show()
            $("#btn_loadmore").hide()
            $.ajax({
                url:"{{ route('home.index') }}" + "?page=" + pageNumber,
                method:"GET",
                success:function(data)
                {
                    $("#div_loadmore").hide()
                    $("#btn_loadmore").show()
                    if (data.length == 0) {

                    } else {
                        pageNumber +=1
                        $("#portfolio_row").append(data.html)
                    }
                }
            })
        }
    </script>
@endsection