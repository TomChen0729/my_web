<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('stylesheet')
    <title>@yield('title')</title>
    <style>
        body{
            background-color:#FFF9EA;
            overflow: hidden;/*不滾動頁面*/
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(7, 1fr); /* 7列，每列平均分配剩余空间 */
        }

        .grid-item {
            background-color: #FFF9EA; /* 单元格背景颜色 */
            height: 120px; /* 单元格高度 */
            text-align: center; /* 文本水平居中 */
            line-height: 120px; /* 垂直居中 */
            border: 1px solid orange;
            border-top: none; /* 移除上边框线 */
            color:#FFB343;
            font-size:72px;
        }

        .grid-item i{
            cursor:pointer;
        }

        .bottom-grid-container {
            display: flex;
            align-items: flex-end; /* 将内容垂直靠下 */
            justify-content: flex-end; /* 将内容水平靠右 */
            height: 80vh; /* 将容器设置为视口高度的80% */
        }
        
        .bottom-grid-item {
            position: fixed;/*固定*/
            bottom:0;
            display: flex;
            justify-content: flex-end;
            background-color: #FFF9EA;
            height: 60px;
            text-align: center;
            border: 1px solid orange;
            color: #FFB343;
            font-size: 48px;
            gap:10px;
        }

        .bottom-grid-item i {
            line-height: 60px;
            cursor:pointer; 
        }

    @yield('style')
    </style>
</head>
<body>
    <div class="top">
    <div class="grid-container">
        <div class="grid-item"><i class="fa-regular fa-face-smile"></i></div>
        <div class="grid-item"><i class="fa-solid fa-suitcase-rolling"></i></div>
        <div class="grid-item"><i class="fa-solid fa-list-check"></i></div>
        <div class="grid-item"><i class="fa-solid fa-ranking-star"></i></div>
        <div class="grid-item"><i class="fa-solid fa-shop"></i></div>
        <div class="grid-item"><i class="fa-solid fa-clock-rotate-left"></i></div>
        <div class="grid-item"><i class="fa-solid fa-heart"></i></div>
    </div>
        @yield('maincode')
    </div>
    <footer>
    <div class="bottom">
        <div class="bottom-grid-container">
            <div class="bottom-grid-item"><i class="fa-regular fa-address-book"></i><i class="fa-solid fa-calendar-days"></i><i class="fa-solid fa-envelope"></i><i class="fa-solid fa-gear"></i></div>
        </div>
    </div>
        @yield('footer')
    </footer>
</body>
</html>