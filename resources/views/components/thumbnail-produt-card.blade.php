<div class="row mt-2">
    @foreach ($products as $product)
        <div class="col-sm-6 col-md-4 ">
            <div class="thumbnail px-2 py-2 border">
            <img class="img-responsive" style="max-height:10rem;" src="{{ $product->imagePath }}" alt="...">
                <div class="caption">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <div class="clearfix">
                        <div class="float: left;">
                            <span>Pret : <b>{{ $product->price }} RON</b></span>
                        </div>
                        <div style="float: right;">
                            <a href="add-to-cart/{{$product->id}}" class="btn btn-success" role="button">Add to cart</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
