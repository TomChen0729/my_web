<!--  -->
@extends('layouts.base')

@section('stylesheet')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="resources/css/app.css">
<script src="resources/js/app.js"></script>
@endsection

@section('title', '測試')

@section('maincode')
<div class="container" style="display: flex;">
    <!-- 左邊欄 -->
    <div class="left-column" style="background-color: black; height: 200px; width: 200px;">
    @if(count($question) > 0 && count($description) > 0)
        @foreach($question as $item)
            <!-- 題目 -->
            <li class="content" id="question">{{$item}}</li>     
        @endforeach
        @foreach($description as $item)
            <!-- 題目敘述 -->
            <li class="description" id="quesDescription">{{$item}}</li>
        @endforeach
    @endif
    </div>
    <!-- 右邊欄 -->
    <div class="right-column" style="background-color: blue; height: 200px; width: 200px; margin-left: 50px">
    @if(count($code) > 0 && count($code_description) > 0)
        @foreach($code as $item)
            <!-- code -->
            <li class="content" id="code">{{$item}}</li>
        @endforeach
        @foreach($code_description as $item)
            <!-- code描述 -->
            <li class="description" id="codeDescription">{{$item}}</li>
        @endforeach
    @endif
    </div>
</div>

@endsection

@section('footer')

@endsection

