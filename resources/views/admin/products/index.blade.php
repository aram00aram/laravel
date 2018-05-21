@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModals"><i class="fa fa-plus-square-o"></i> Создать</button>
        </ol>
        <div class="modal fade" id="myModals" role="dialog">
            @include('admin.products.create')
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            @include('admin.products.edit')
        </div>






        <div class="card-columns">
        @foreach($products as $product)
        <div class="card col-md m-1 ">
           {{-- <img class="card-img-top" src="https://www.safelinkwireless.com/Enrollment/Safelink/en/NewPublic/IMG/smartphones-img.jpg" alt="{{$product->meta_title}}">
            --}}

            <div class="card-body">
                <h5 class="card-title"> {{$product->product_name}}</h5>
                <p class="card-text"> {{$product->description_short}}...</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card-footer">
                <button type="button" name="product_edit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal" id="{{$product->id}}"><i class="fa fa-plus-square-o"></i> Редактировать</button>

            </div>
        </div>

        @endforeach
    </div>

    </div>
@endsection