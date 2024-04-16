@extends('layouts.game')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/story.css') }}">
@endsection

@section('title', '劇情')

@section('style')
.story-container {
    margin-top:350px;
    margin-bottom:-480px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.story-box {
    position: relative; /* 将对话框定位设置为相对定位 */
    width: 700px;
    background-color: #FFB343;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.story-box h5 {
    position: absolute; /* 将标题文本设置为绝对定位 */
    top: 10px; 
    right: 10px; 
    color: #041E7A;
    margin: 0;
    cursor:pointer;
}


.story-box p {
    color: #666;
    line-height: 1.6;
}

.story-box buttom {
    position: absolute; /* 将标题文本设置为绝对定位 */
    bottom: 10px; 
    right: 10px;
    color: #041E7A;
    background-color:#B7D8FF;
    border:1px solid #041E7A;
    padding: 4px 8px; /* 添加内边距 */
    cursor: pointer;/*鼠標樣式*/
}
@endsection

@section('maincode')
<div class="story-container">
        <div class="story-box">
            <h5>略過</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis nam deleniti saepe esse eveniet laboriosam laudantium qui rem assumenda incidunt delectus ex corrupti non eaque debitis.</p>
            <buttom>下一步</buttom>
        </div>
    </div>
@endsection