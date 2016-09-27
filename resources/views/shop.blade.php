@extends("layouts.main")
@section("content_1")
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include("parts.sidebar")
            </div>
              @include("parts.shopItem")
        </div>
    </div>
</section>.
@endsection