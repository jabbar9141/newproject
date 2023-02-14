<style>
    .main {
    text-align: center;
    margin-top: 130px;
    margin-bottom: 123px;
}
.main h1{
    color: blue;
    margin-top: 30px;
}
</style>
@extends('main-template')
@section('section')
<div class="main">
    <img class="class_img_error_page" src="{{ URL::asset('img/login_icon.png') }}">
    <h2 class="class_text_title_error_page">ERROR 404</h2>
</div>
@endsection


