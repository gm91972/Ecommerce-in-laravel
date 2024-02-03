<div class="container mt-5 bg-light py-4" id="mobiles">
  <div class="container py-3 product-container">
    <h4 class="mb-4 d-inline mx-4">Latest Mobiles</h4>
    <!-- <a href="{{ route ('view_all_mobiles') }}" class="view-all">View All</a> -->
  </div>

  <div class="row px-3 mx-3">
    <!-- Product 1 -->

    @foreach($product as $key => $product)

    @if($key > 7 && $key < 16)

     <div class="col-lg-3 col-md-1 mb-1">
      <div class="card border-0 mx-0 my-3">
        <a href="{{url('product_details', $product->id)}}">
          <img src="product/{{$product->image}}" class="card-img-top img-thumbnai px-5 py-5" alt="Product 1">
        </a>
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text font-weight-bold">Rs.{{$product->price}}</p>
          
          <form action="{{url('add_to_cart', $product->id)}}" method="post">
            @csrf
            <input class="btn btn-light" type="submit" value="Add to Cart">
          </form>
          
        </div>
      </div>
  </div>

  @endif
  @endforeach



</div>
</div>