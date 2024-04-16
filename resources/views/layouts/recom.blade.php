@extends('layouts.base')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/recom.css') }}">
@endsection

@section('title', '重組')

@section('style')

.question {
    width: 1400px;
    height: 140px;
    background-color: #F3B355;
    margin-top: 20px;
    margin-left:55px;
    justify-content: center; /* 水平居中 */
}

.ans {
    width: 1400px;
    height: 300px;
    background-color: #D9DB72;
    margin-top:20px;
    margin-left:55px;
    justify-content: center; /* 水平居中 */
}

.contianer-retangle {
    display: flex;
    flex-wrap: wrap; /* 換行 */
    justify-content: center; /* 水平居中 */
    align-items: flex-start; /* 對齊頂部 */
}

.rectangle {
    width: 250px;
    height: 70px;
    background-color: #94DEFE;
    margin: 18px;
}
@endsection

@section('maincode')
<div class="question"></div>
<div class="ans"></div>
<div class="contianer-retangle">
    @for ($i = 0; $i < 10; $i++)
        <div class="rectangle"></div>
    @endfor
@endsection
