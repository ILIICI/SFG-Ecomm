@extends('master')
@section('pagetitle')
    SFG - web shopping
@endsection
@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

@endsection
@section('content')
<div class="container">
    <div class="card">
        @if (Session::has('cart'))
        <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">{{$totalQty}} items</div>
                </div>
            </div>
            @foreach ( $products as $product)
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="{{ $product['item']['imagePath'] }}"></div>
                        <div class="col">
                            <div class="row">{{ $product['item']['name'] }}</div>
                        </div>
                        <div class="col"> 
                            <a href="reduce/{{$product['item']['id']}}">-</a>
                            <a href="#" class="border">{{ $product['qty'] }}</a>
                            <a href="increase/{{$product['item']['id']}}">+</a> 
                        </div>
                        <div class="col">{{ $product['price'] }}RON
                            <a href="remove/{{$product['item']['id']}}">Remove</a> 
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">{{ $totalQty }} items</div>
                <div class="col text-right">{{ $totalPrice }} RON</div>
            </div>
            <form>
                <p>Pay</p>
                <p>CardNumber</p> <input id="code" placeholder="Enter card">
                <p>Ex Date</p> <input id="code" placeholder="Enter card">
                <p>CVV</p> <input id="code" placeholder="Enter card">
                <button class="btn btn-success">CHECKOUT</button>
            </form>
        </div>
        </div>
        @else
            
        @endif
    </div>
</div>
@endsection

