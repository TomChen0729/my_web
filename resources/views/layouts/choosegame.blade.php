<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇遊戲</title>
    <style>
        .left-container {
            position: fixed;
            left: 0;
            top: 0;
        }

        .left {
            width: 770px;
            height: 740px;
            cursor: pointer;
            background-color: #ccc;
            border:none;
            transition: background-color 0.3s; /* 添加颜色过渡效果 */
        }

        .left:hover {
            background-color: #999;
        }

        .left .first-line {
            color: white;
            font-size: 72px;
            margin-bottom: 20px;
        }

        .left .second-line {
            color: white;
            font-size: 48px;
        }

        .right-container {
            position: fixed;
            right: 0;
            top: 0;
        }

        .right {
            width: 770px;
            height: 740px;
            cursor: pointer;
            background-color: #ccc;
            border:none;
            transition: background-color 0.3s; /* 添加颜色过渡效果 */
        }

        .right .first-line {
            color: white;
            font-size: 72px;
            margin-bottom: 20px;
        }

        .right:hover {
            background-color: #999; /* 悬停时背景颜色变暗 */
        }
    </style>
</head>
<body>
    <div class="left-container">
        <button class="left">
            <span class="first-line">主關卡</span><br>
            <span class="second-line">知識卡</span><br>
        </button>
    </div>
    <div class="right-container">
        <button class="right">
            <span class="first-line">學習區</span><br>
        </button>
    </div>
</body>
</html>
