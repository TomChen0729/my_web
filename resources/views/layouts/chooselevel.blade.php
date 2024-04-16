@extends('layouts.game')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/level.css') }}">
@endsection

@section('title', '選擇難度')

@section('style')
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap:80px;
}

.lv{
    border: 5px solid #FFB343;
    border-radius: 10px; /* 圆角半径 */
    background-color:#FFD699;
    color:white;
    width:300px;
    height:150px;
    margin-top:150px;
    margin-bottom:-300px;
    font-size:48px;
    cursor:pointer;
}

.lv:hover{
    background-color:#FFB343;
}
@endsection

@section('maincode')
<div class="container">
    <button class="lv">LV.1</button>
    <button class="lv">LV.2</button>
    <button class="lv">LV.3</button>
</div>
@endsection

