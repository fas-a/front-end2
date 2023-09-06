<div id="carouselExampleIndicators" class="carousel slide"  data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active rounded-circle" aria-curent="true" aria-label="Slide 1">
        </button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="rounded-circle" aria-label="Slide 2">
        </button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="rounded-circle" aria-label="Slide 3">
        </button>
    </div>
    <div class="carousel-inner">
        @foreach ($posts as $post)
        <div class="carousel-item active">
            <div class="item">
                <img src="{{ $post->image ?? asset('/assets/beach-hd.jpg')}}" class="d-block w-100" alt="..." style='object-fit:cover; border-radius:5px;' height='410px'>
            </div>
            <div class="card-img-overlay text-white ms-4 mt-3" style="width:30rem;">
                <h1 class="display-3 fw-bold">
                    {{ $post->title ?? 'The title belongs heres' }}
                </h1>
            </div>
            <div class="card-img-overlay text-white d-flex align-items-end ms-4">
                <p class=''>
                    {{ $post->author ?? 'by Author\'s name' }}
                    <br>
                    <span class='fs-11'>{{ $post->date ?? 'January 21, 2023'}} on
                        <u>{{ $post->category ?? 'Post\'s category' }}</u>
                    </span>
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>