@extends('layouts.base')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/circle.css') }}">
@endsection

@section('title', '是非')

@section('style')
        /* CSS 样式 */
        .rectangle {
            margin-top:70px;
            width: 80%;
            height: 350px; 
            background-color: #ccc;
            border-radius: 15px; /* 添加圆角 */
            position: relative;
            overflow: hidden; /* 隐藏超出范围的文本 */
        }

        .content {
            position: absolute;
            top:2%;
            left:2%;
        }

        .rectangle-container {
            display: flex;
            justify-content: center; /* 水平居中 */
            align-items: center; /* 垂直居中 */
            height:45vh;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 80px;
            margin-top:100px;
        }

        .button1, .button2{
            width: 400px;
            height: 200px;
            background-color: #ccc;
            border: none;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            color:white;
        }
        
        .button1{
            background-color:#94DEFE;;
        }

        .button2{
            background-color:#FF6161;;
        }
@endsection

@section('maincode')
<div class="rectangle-container">
    <div class="rectangle">
    <div class="content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas at harum sed eos sunt numquam dicta optio velit facilis accusantium cumque autem distinctio id, amet aspernatur vero a. Perspiciatis, quia.
    </div>
    </div>
</div>

<div class="buttons">
        <button class="button1">O</button>
        <button class="button2">X</button>
    </div>
@endsection