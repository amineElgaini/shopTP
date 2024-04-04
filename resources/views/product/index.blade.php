@extends('layout.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"] ?? "Products")
@section('content')
<div class="row">
  @foreach ($viewData["products"] as $product)
<div class="col-md-4 col-lg-3 mb-2">
<div class="card">
{{-- <img src="{{ asset('/img/'.$product["image"]) }}" class="card-img-top img-card"> --}}
<img src="https://fastly.picsum.photos/id/380/200/300.jpg?hmac=pJ07pMQFwFxeKrY1BVtkNgjInt7SZmR0UEOx00OPvHk" class="card-img-top img-card">
<div class="card-body text-center">
<a href="{{ route('product.show', ['product'=> $product["id"]]) }}"
class="btn bg-primary text-white">{{ $product["name"] }}</a>
</div>
</div>
</div>
@endforeach
</div>
@endsection