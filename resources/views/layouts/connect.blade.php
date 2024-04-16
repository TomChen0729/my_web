@extends('layouts.base')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/connect.css') }}">
@endsection

@section('title', '連連看')

@section('style')
.container {
    display: flex; /* 使用 Flexbox 布局 */
    justify-content: space-between; /* 左右对齐 */
    width: 100%;
    padding: 10px; /* 内边距，使长方形与容器边缘保持距离 */
    box-sizing: border-box; /* 设置盒子模型，使内边距和边框不增加容器宽度 */
}

.left-container, .right-container {
    width: 45%; /* 容器宽度 */
}

.left-container{
    margin-left:10px;
    margin-top:40px;
    margin-right:500px;
}

.right-container{
    margin-top:80px;
}

.left-rectangle {
    width: 1000px;
    height: 100px;
    margin-bottom: 10px; /* 设置长方形之间的间距 */
}

.right-rectangle {
    width: 200px;
    height: 70px;
    margin-bottom: 10px; /* 设置长方形之间的间距 */
}
@endsection

@section('maincode')
<div class="container">
    <div class="left-container">
        @for ($i = 0; $i < 5; $i++)
            <div class="left-rectangle" style="background-color: #F0A5F7;"></div>
        @endfor
    </div>

    <div class="right-container">
        @for ($i = 0; $i < 6; $i++)
            <div class="right-rectangle" style="background-color: #A5F7A5;"></div>
        @endfor
    </div>
</div>
@endsection
