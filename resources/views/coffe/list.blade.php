@extends('core.app')
@section('title','Danh sách ')
@section('content')
    <div class="row tm-gallery">
    <div id="tm-gallery-page-pizza" class="tm-gallery-page">
        <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
            <figure>
                <img src="{{asset('img/gallery/01.jpg')}}" alt="Image" class="img-fluid tm-gallery-img" />
                <figcaption>
                    <h4 class="tm-gallery-title">Fusce dictum finibus</h4>
                    <p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan</p>
                    <p class="tm-gallery-price">$45 / $55</p>
                </figcaption>
            </figure>
        </article>
    </div>
@endsection
