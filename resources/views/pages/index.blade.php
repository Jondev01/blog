@extends('layouts/app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="card-text">
               <h3>Create your own blog today!</h3> 
               <a href={{route('register')}}>Join now!</a>
            </div>
        </div>
    </div>
</div>
@endsection
