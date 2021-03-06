<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    @foreach($products as $item)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{$item->images}}" alt="" />
                    <h2>{{$item->price}}</h2>
                    <p>{{$item->name}}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>{{$item->price}}</h2>
                        <p>{{$item->name}}</p>
                        <form method="POST" action="{{url("cart")}}">
                            <input type="hidden" name="product_id" value="{{$item->id}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" class="btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </form>
                        <!--<a href="{{url("/productsDetails/$item->id")}}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>Product Detail</a>-->
                        
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach

    <ul class="pagination">
        <li class="active"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">&raquo;</a></li>
    </ul>
</div><!--features_items-->