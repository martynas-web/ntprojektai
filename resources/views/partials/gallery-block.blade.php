<div class="gallery-heading" id="Gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Galerija</h1>
             </div>
        </div>
    </div>
    <div class="gallery-wrapper">
        <div class="container gallery-widget">
            <form role="search" method="get" action="{{ esc_url( home_url( '/' ) ) }}" class="form-inline justify-content-center gallery-search">
                <input type="text" class="form-search mb-2 mr-sm-2" name="photo" id="i" placeholder="Ieškokite nuotraukos">
                <button type="submit" class="btn form-button active mb-2">Ieškoti</button>
              </form>
            <div class="row">
                @if (!empty($gallery_posts)) 
                @foreach ($gallery_posts as $item)
                <div class="col-12 col-sm-6 col-md-4 p-3"> 
                   <div class="gallery-photo">
                    <img src="{!! $item["urls"]["regular"] !!}" width="100%" height="350px" alt="">
                    <p>{!! $item["description"] !!}</p>
                    </div>
                </div>
                 @endforeach
                 @else 
                 <div class="col-sm-12"><h3 class="text-center">Nuotraukų nėra </h3></div>
                 @endif
            </div>
        </div>
    </div>
</div>