@extends('layouts.game')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/level.css') }}">
@endsection

@section('title', '關卡')

@section('style')
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    height: calc(100vh - 100px); /* 视口高度减去 100px，可以根据需要调整 */
}

.level {
    margin-top: 50px;
    width: 200px;
    height: 200px;
    margin: 10px;
    border: 5px solid #FFD699;
    border-radius: 50%; /* 圆形按钮的边框半径设置为按钮宽度的一半 */
    background-color: #FFE6B3;
    color: white; 
    font-size: 48px;
    cursor: pointer;
}

.level:hover {
    background-color: #FFB343;
}
@endsection

@section('maincode')
<div class="container">
    <button class="level">Level 1</button>
    <button class="level">Level 2</button>
    <button class="level">Level 3</button>
    <button class="level">Level 4</button>
    <button class="level">Level 5</button>
    <button class="level">Level 6</button>
</div>

@endsection