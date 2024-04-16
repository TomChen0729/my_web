@extends('layouts.base')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/choose.css') }}">
<script src="https://kit.fontawesome.com/f098d16396.js" crossorigin="anonymous"></script>
@endsection

@section('title', '選擇')

@section('style')
.top-rectangle{
    width: 100%;
    height: 180px;
    background-color: #ccc;
    position: absolute; /* 设置长方形为绝对定位 */
    top:0;
}

.rectangle{
    width: 100%;
    height: 250px;
    background-color: #FFEDD9;
    position: absolute; /* 设置长方形为绝对定位 */
    bottom: 0;
    display: flex;
    justify-content: center; /* 水平居中 */
    align-items: center; /* 垂直居中 */
    gap:150px;/*選項間距*/
}

.button {
            width: 180px;
            height: 180px;
            background-color: #ccc;
            border: none;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;/*鼠標樣式*/
        }

.people{
    margin-top:250px;
    margin-left:100px;
}

.fa-person{
    font-size:250px;
    color:#ccc;
}

.fa-comment-dots{
    font-size:80px;
    margin-left:-40px;
    position: relative;
    top: -200px;
}
@endsection

@section('maincode')
<div class ="top-rectangle"></div>
<div class="people">
    <i class="fa-solid fa-person"></i>
    <i class="fa-regular fa-comment-dots"></i>
</div>
<div class="rectangle">
    <button class="button">A</button>
    <button class="button">B</button>
    <button class="button">C</button>
    <button class="button">D</button>
</div>
@endsection