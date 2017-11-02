<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
<title>特码段位走势 － 六合开奖记录直播</title>
<meta name="keywords" content="一起发开奖现场,手机报码,特码段位走势,手机开奖网址" />
<meta name="description" content="一起发开奖现场第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果" />	
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link type="text/css" rel="stylesheet" href="/Index/Public/wap/mobile.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>view.css"/>
	<link href="<?php echo (CSS_URL); ?>zoushi-wap.css" rel="stylesheet" type="text/css">
	<script src="<?php echo (JS_URL); ?>superslide.js" type="text/javascript"></script>
	<script language="javascript" src="<?php echo (JS_URL); ?>zst.js"></script>
<style type="text/css">
.bg{ background: #E1E1FF no-repeat center center;text-align:center;color:#000000;font-size:15px;font-family:Arial;}
.zous-2col-long .zstable2-main-scrollhd {position:fixed;z-index:10;top:85px;left:0px;}
.zous-2col-long .zstable2-main-scrollbd {margin-top:80px;}
</style>
</head>

<body>
<!--head begin-->
<header id="uiHead" class="ui-head">
    <div class="ui-head-in">
        <div class="ui-head-l">
            <span class="ui-head-btn1">返回</span>
        </div>
        <div class="ui-head-m">
            <h2 class="ui-head-tit">六合走势图</h2>
        </div>
    </div>
</header>
<!--head end-->
<!--彩种导航 start-->
<div class="ui-navbox">
    <div class="ui-navbox-in">
        <ul>
<li><a class="select" href="?id=2017">2017</a></li>
<li><a href="?id=2016">2016</a></li>
<li><a href="?id=2015">2015</a></li>
<li><a href="?id=2014">2014</a></li>
        </ul>
    </div>
</div>
<!--彩种导航 end-->

<div class="wrapper">
    <div class="zous-2col zous-2col-long">

    <div class="zous-2col-r zstable2-main-scroll">
        <table class="zstable2 zstable2-main zstable2-main-scrollhd zstable2-yil">
            <colgroup>
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
            </colgroup>
<tr style="background:#efefef;">
<td width="40" rowspan="2">期数</td>
<td width="40" rowspan="2">特码</td>
<td colspan="7">特段走势图</td>
</tr>
<tr style="background:#f9f9f9;">
<td width="126">第一段(01-07)</td>
<td width="126">第二段(08-14)</td>
<td width="126">第三段(15-21)</td>
<td width="126">第四段(22-28)</td>
<td width="126">第五段(29-35)</td>
<td width="126">第六段(36-42)</td>
<td width="126">第七段(43-49)</td>
</tr>

        </table>
        <table class="zstable2 zstable2-main zstable2-main-scrollbd zstable2-yil">
            <colgroup>
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
                <col width="30">
            </colgroup>
<tr style="background:#ffc;" class="red bold">
<td>出现次数</td>
<td> </td>
<td><?php echo ($counts[0]); ?> 次</td>
<td><?php echo ($counts[1]); ?> 次</td>
<td><?php echo ($counts[2]); ?> 次</td>
<td><?php echo ($counts[3]); ?> 次</td>
<td><?php echo ($counts[4]); ?> 次</td>
<td><?php echo ($counts[5]); ?> 次</td>
<td><?php echo ($counts[6]); ?> 次</td>
</tr>
<tr>
<td class="bold" style="height:40px">预测本期</td>
<td></td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','一');">一</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','二');">二</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','三');">三</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','四');">四</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','五');">五</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','六');">六</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','七');">七</td>
</tr>
<?php if(is_array($list)): foreach($list as $key=>$row): ?><tr onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#ffffcc'">
<td><?=$row['title']?></td>
<td style="background:#ffc;"><span class="<?=yx_no_band($row['tit7'],1)?> F"><?=$row['tit7']?></span></td>
<?php if ($row['tit7']<='07'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff><?=$row['tit7']?></FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit7']>='08' and $row['tit7']<='14'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff><?=$row['tit7']?></FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit7']>='15' and $row['tit7']<='21'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff><?=$row['tit7']?></FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit7']>='22' and $row['tit7']<='28'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff><?=$row['tit7']?></FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit7']>='29' and $row['tit7']<='35'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff><?=$row['tit7']?></FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit7']>='36' and $row['tit7']<='42'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff><?=$row['tit7']?></FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>
<?php if ($row['tit7']>='43'){?><td class="<?=yx_no_band($row['tit7'],4)?>"><FONT color=#ffffff><?=$row['tit7']?></FONT></td><?php }else{?><td class="hui_color">-</td><?php } ?>



</tr><?php endforeach; endif; ?>
<tr id="forecast" title="模拟选号">
<td class="yellow bold">模拟选号</td>
<td class="white"></td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','一');">一</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','二');">二</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','三');">三</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','四');">四</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','五');">五</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','六');">六</td>
<td class="yellow enfont" onClick="SelectNum(this,'Red','七');">七</td>
</tr>
<tr id="disnum" class="white red bold enfont">
<td>出现次数</td>
<td> </td>
<td><?php echo ($counts[0]); ?> 次</td>
<td><?php echo ($counts[1]); ?> 次</td>
<td><?php echo ($counts[2]); ?> 次</td>
<td><?php echo ($counts[3]); ?> 次</td>
<td><?php echo ($counts[4]); ?> 次</td>
<td><?php echo ($counts[5]); ?> 次</td>
<td><?php echo ($counts[6]); ?> 次</td>
</tr>
<tr class="head bold">
<td rowspan="2">期数</td>
<td rowspan="2">特码</td>
<td>第一段(01-07)</td>
<td>第二段(08-14)</td>
<td>第三段(15-21)</td>
<td>第四段(22-28)</td>
<td>第五段(29-35)</td>
<td>第六段(36-42)</td>
<td>第七段(43-49)</td>
</tr>
<tr class="head bold">
<td colspan="7">特段走势图</td>
</tr>				
</table>
    </div>
</div>
</div>


<div class="zous-foot-qh-wrap">
    <div class="zous-foot-qh">

        <span class="on">特码段位走势</span>

    </div>
</div>


<div class="zous-haomb-btn hide"></div>

<!--弹层 开始-->
<div class="ui-alert-layer hide"></div>
<div class="zous-haomb on hide">

</div>
<!--弹层 结束-->




<script type="text/javascript" src="/Index/Public/wap/vendor.js"></script>



<script type="text/javascript">
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        clickEvent = "tap";
    } else {
        clickEvent = "click";
    }

    $(function () {

        //切换统计的期数
        $("span[data-code]").on(clickEvent, function () {
            $(".zous-foot-qh span").removeClass("on");
            $(this).addClass("on");
            var code = $(this).attr("data-code");
            $.get("/chart/ssq/houqu/" + code, function (data) {
                $(".wrapper").html(data);
                addScroll();
            })
        });

        //投注弹窗
        $('.zous-haomb-btn').on(clickEvent, function () {
            $('.ui-alert-layer').removeClass('hide');
            $('.zous-haomb').removeClass('hide');
        });

        //头部
        $(".ui-head-btn1").on("click", function () {
            history.back();
        });

        $("li[data-href]").on(clickEvent, function () {
            var url = $(this).attr("data-href");
            window.location.href = url + "?_t=" + new Date().getMilliseconds();
        });


        function addScroll(){
            //左右-上下滚动
            var o2ColScrollL = $('.zous-2col-l').width(),
                o2ColScrollHD = $('.zstable2-main-scrollhd').eq(0),
                o2ColScrollHDinfo = $('.zous-2col-longinfo').find('.zstable2-main-scrollhd').eq(0),
                o2ColScroll = $('.zstable2-main-scroll'),
                o2ColScrollinfo = $('.zous-2col-longinfo').find('.zstable2-main-scroll').eq(0),
                nCurScrollLeft;

            $('.zous-2col-r').width($(window).width() - o2ColScrollL);
            $(window).on('resize', function () {
                $('.zous-2col-r').width($(window).width() - o2ColScrollL);
            });

            $(o2ColScroll).scroll(function () {
                nCurScrollLeft = $(this).scrollLeft();
                o2ColScrollHD.css('left', -nCurScrollLeft + o2ColScrollL);
                o2ColScrollinfo.scrollLeft(nCurScrollLeft);
            });
            $(o2ColScrollinfo).scroll(function () {
                nCurScrollLeft = $(this).scrollLeft();
                o2ColScrollHD.css('left', -nCurScrollLeft + o2ColScrollL);
                o2ColScroll.scrollLeft(nCurScrollLeft);
            });
        }
        addScroll();
    });

</script>


</body>
</html>