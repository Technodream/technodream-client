@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card p-0">
            <div class="row">
                <div class="col-lg-8 p-4 d-flex align-items-center justify-content-center flex-column">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, quis maxime. Similique corrupti ex vel itaque possimus est totam incidunt!</p>
                    <a href="" class="btn btn-primary mt-3">Are you a Hakdog?</a>
                </div>
                <div class="col-lg-4 p-4">
                    <img class="w-75 home-banner" src="{{asset('img/dashboard/home-banner.png')}}" alt="Home banner">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-4">
        <div class="card text-left">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Body</p>
          </div>
        </div>
    </div>
</div>
@endsection
