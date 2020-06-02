@foreach($portfolio as $key => $value)
<div class="col-md-6 col-lg-4 mb-5">
    <div class="card">
        <a href="<?php echo url('portfolio/detail',['id'=> $value->id ])?>">
        <div class="portfolio-item mx-auto">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white "><i class="fas fa-eye fa-3x"></i></div>
            </div>
            
            <img class="image-card img-fluid" src="{{ $value->feature_image }}" alt="" />
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