<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="h.css">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <title>注册繁寂账号</title>
</head>
<body>
<div id="bg"><img id="bgimg" src="background.jpg" width="1920" height="1200"></div>
<img id="logimg" src="logo.png" width="535" height="161">
<div id="father">
    <div class="font">
        <h1>用交谈</h1>
        <p>让复杂的关系更简单</p>
    </div>
    <div class="register">
        <h1>欢迎注册</h1>
        <p class="p">已有帐号？<a href="javascript:alert('不，你没有账号！');">登录</a></p>
        <form method="post">

            <label fo="username">
                <span>用户名</span>
                <input type="text" name="username" value="请设置用户名">
            </label>

            <label fo="phoneNumber">
                <span>手机号</span>
                <input type="tel" name="phoneNumber" value="可用于登录和找回密码">
            </label>

            <label fo="password">
                <span>密&nbsp&nbsp&nbsp码</span>
                <input type="text" name="password" value="请设置登陆密码">
                <svg t="1635647814877" class="icon password" viewBox="0 0 1024 1024" version="1.1"
                     xmlns="http://www.w3.org/2000/svg" p-id="1775" width="16" height="16">
                    <path d="M512 952.32a440.32 440.32 0 1 0 0-880.64 440.32 440.32 0 0 0 0 880.64z m0 71.68C229.2224 1024 0 794.7776 0 512S229.2224 0 512 0s512 229.2224 512 512-229.2224 512-512 512z m5.6832-338.4832a56.8832 56.8832 0 1 0 0 113.7664 56.8832 56.8832 0 0 0 0-113.7664z m0-455.1168C486.2464 230.4 460.8 255.8464 460.8 287.2832v284.4672a56.8832 56.8832 0 0 0 113.7664 0V287.232c0-31.4368-25.4464-56.8832-56.832-56.8832z"
                          fill="#515151" p-id="1776"></path>
                </svg>
            </label>

            <label fo="testWord">
                <span>验证码</span>
                <input type="text" name="testWord" value="请输入验证码">
                <span class="yzm">获取验证码</span>
            </label>

            <input type="submit" value="注册">

            <div class="bot">
                <input type="checkbox">
                <span>
                阅读并接受
                <a href="javascript:alert('不要讨论不该讨论的！你懂就好！');">《聊天室用户协议》</a>
                及
                <a href="javascript:alert('网络冲浪者都在裸奔！你也是！^_^');">《用户隐私权保护声明》</a>
                </span>
            </div>

        </form>
    </div>
</div>
<div id="help">
    帮助中心 &nbsp&nbsp | &nbsp&nbsp
    <svg t="1635607125451" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
         p-id="1558" width="16" height="16">
        <path d="M927.616 465.6C923.328 236.704 745.888 51.808 528 51.808h-32c-217.888 0-395.328 184.896-399.616 413.76C58.112 487.744 32 528.672 32 576v64c0 70.592 57.408 128 128 128s128-57.408 128-128v-64a128.064 128.064 0 0 0-126.784-127.872C173.728 262.688 318.912 115.808 496 115.808h32c177.12 0 322.272 146.88 334.784 332.32A128.064 128.064 0 0 0 736 576v64c0 57.792 38.72 106.176 91.392 122.016a337.504 337.504 0 0 1-191.936 124.48A79.712 79.712 0 0 0 560 832a80 80 0 1 0 0 160 79.68 79.68 0 0 0 67.872-38.112 402.432 402.432 0 0 0 278.24-193.6C955.968 742.816 992 695.776 992 640v-64c0-47.328-26.112-88.256-64.384-110.4zM224 576v64c0 35.296-28.704 64-64 64s-64-28.704-64-64v-64c0-35.296 28.704-64 64-64s64 28.704 64 64z m704 64c0 34.304-27.2 62.176-61.12 63.712l-2.496-1.184c-0.224 0.512-0.576 0.928-0.8 1.408A64 64 0 0 1 800 640v-64c0-35.296 28.704-64 64-64s64 28.704 64 64v64z"
              p-id="1559" fill="#ffffff"></path>
    </svg>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2021@FanJi
</div>
</body>
<script>
    /*绑定默认值*/
    function morenzhi(theItem, p = false, theItems) {
        $(document).ready(function () {

            var defaults = $(theItem).val();
            $(theItem).focus(function () {
                //获得焦点时，如果值为默认值，则设置为空
                if ($(this).val() === defaults) {
                    if (p) {
                        $(this).attr("type", "password");
                        $(theItems).attr("display", "none");
                    }
                    $(this).val("");
                }
            });

            $(theItem).blur(function () {
                //失去焦点时，如果值为空，则设置为默认值
                if ($(this).val() === "") {
                    if (p) {
                        $(this).attr("type", "text");
                        $(theItems).attr("display", "");
                    }
                    $(this).val(defaults);
                }
            });

        });
    }

    /*背景图片自适应*/
    function FullScreenBackground(theItem) {
        var winWidth = $(window).width();
        var winHeight = $(window).height();
        var imageWidth = $(theItem).width();
        var imageHeight = $(theItem).height();
        var picHeight = imageHeight / imageWidth;
        var picWidth = imageWidth / imageHeight;
        if ((winHeight / winWidth) < picHeight) {
            $(theItem).css("width", winWidth);
            $(theItem).css("height", picHeight * winWidth);
        } else {
            $(theItem).css("height", winHeight);
            $(theItem).css("width", picWidth * winHeight);
        }
        $(theItem).css("margin-left", winWidth / 2 - $(theItem).width() / 2);
        $(theItem).css("margin-top", winHeight / 2 - $(theItem).height() / 2);
    }

    /*logo自适应*/
    function FullLogoBackground(theItem) {
        const winWidth = $(window).width();
        const winHeight = $(window).height();

        const imageWidth = $(theItem).width();
        const imageHeight = $(theItem).height();
        if (winWidth / winHeight > 1) {
            $(theItem).css("width", winWidth / 6);
            $(theItem).css("height", (winWidth / 6) / (imageWidth / imageHeight));
        } else {
            $(theItem).css("width", (winHeight / 12) / (imageHeight / imageWidth));
            $(theItem).css("height", winHeight / 121);
        }
    }

    window.onload = function () {
        FullScreenBackground("#bgimg");
        FullLogoBackground("#logimg");
        morenzhi("input[name='username']");
        morenzhi("input[name='phoneNumber']");
        morenzhi("input[name='password']", true, ".password");
        morenzhi("input[name='testWord']");
    }
    $(window).resize(function () {
        FullScreenBackground("#bgimg");
        FullLogoBackground("#logimg");
    });
</script>
</html>