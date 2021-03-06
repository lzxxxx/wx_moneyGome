<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx474cfa64fb9de233", "d247fd4450c057cc0c705f5b0dfc00af");
$signPackage = $jssdk->GetSignPackage();
?>
<?php 
$code = $_GET['code'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>挑战手速!赢大奖!!</title>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/page1.css">
	<link rel="stylesheet" href="css/page2.css">
	<link rel="stylesheet" href="css/page3.css">
	<script type="text/javascript">
		(function(html) {	
			change();
			function change(){
				var w = html.clientWidth;
				if (w>640) {
					w=640;
				}
				var size = Math.round(w/320*100);
				html.style.fontSize = size+"px";
			}
			window.onresize = change;
		})(document.documentElement);
	</script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		html,body{
			width: 100%;
			height: 100%;
		}
		#wrap{
			overflow: hidden;
		}
	</style>
</head>

<body>
	<div id="wrap">
		<!-- 第一个页面 -->
		<div id="page1">
			<div class='p1-content'>
				<!-- 头部文字 -->
				<div class="p1-title">
					<img src="img/money_sm.png" alt="" class="animated wobble">
					<img src="img/challenge.png" alt="" class="animated bounceIn">
					<img src="img/tanhao.png" alt="" class="animated rubberBand">
					<img src="img/challenge1.png" alt="" >
				</div>
				<!-- 开始游戏 -->
				<div class="p1-start">
					<img src="img/start.png" alt="" class='start-btn'>
					<img src="img/shou.png" alt="">
				</div>
				
			</div>
			<!-- 表单 -->
			<div class="form">
				<span class="close"></span>
				<input type="text" placeholder="姓名"><br>
				<input type="text" placeholder="电话"><br>
				<input type="button" class="submit">
			</div>
		</div>
		<!-- 列表按钮 -->
		<ul class="list">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<!-- 蒙版 -->
		<div class='p1-mask'></div>
		<!-- 数钱榜 -->
			<div class="level text-bg">
				<span class="close"></span>
				<ul class="bang">
					<li>
						<img src="img/1.png" alt="">
						<img src="img/5.jpg" alt="">
						<span>无敌是多么寂寞</span>
						<span>1021</span>
					</li>
					<li>
						<img src="img/2.png" alt="">
						<img src="img/5.jpg" alt="">
						<span>无敌是多么寂寞</span>
						<span>988</span>
					</li>
					<li>
						<img src="img/3.png" alt="">
						<img src="img/5.jpg" alt="">
						<span>无敌是多么寂寞</span>
						<span>888</span>
					</li>
					<li>
						<p>4</p>
						<img src="img/5.jpg" alt="">
						<span>无敌是多么寂寞</span>
						<span>750</span>
					</li>
					<li>
						<p>5</p>
						<img src="img/5.jpg" alt="">
						<span>无敌是多么寂寞</span>
						<span>500</span>
					</li>
				</ul>
			</div>
			<!-- 活动规则 -->
			<div class="rule text-bg">
				<span class="close"></span>
				<h2>活动规则</h2>
				<p>1、每人有多次游戏机会，但成绩只能提交一次，且提交之后不能更改！</p>
				<p>2、提交成绩时要提供姓名及手机号码作为兑奖凭证，因用户本人未在规定时间内提供正确的手机号码造成的奖品损失，由用户个人承担。</p>
				<p>3、活动时间为2016年5月11日-5月19日24:00，活动结束后将在“雾灵山庄”微信公布中奖名单。</p>
				<p>4、获奖规则：系统将根据大家提交的成绩，按照由多到少的规则进行排行，排名第1的网友将获得一等奖，排名第2-第21位的网友将分获二等奖，以此类推。</p>
				<p>5、奖品的发放：活动结束后，将由工作人员与您取得联系，并将相应的卡券编号发送到您提供的手机号码上。</p>
			</div>
			<!-- 活动奖品 -->
			<div class="reword text-bg">
				<span class="close"></span>
				<h2>活动奖品</h2>
				<p>一等奖1人：价值1488元7号楼1晚豪华标间免费房券1张，并可享康体项目3折优惠；</p>
				<p>二等奖20人：100元订房代金券每人1张，并可享康体项目4折优惠；</p>
				<p>三等奖50人：50元订房代金券每人1张，并可享康体项目5折优惠。</p>
				<p>奖品的有效期：2016年5月20日至6月15日（周五、周六及法定节假日不可用）</p>
			</div>
			<!-- 奖卷使用情况 -->
			<div class="tick text-bg">
				<span class="close"></span>
				<h2>奖卷使用情况</h2>
				<p>1、奖品的使用：请务必至少提前一周致电010-81027788或81027799进行预约，并于入住时向前台服务人员出示您手机上收到的卡券编号即可使用（需同时验证获奖人姓名与手机号码）。</p>
				<p>2、代金券仅适用于线下门市价入住客房消费使用，不适用于通过携程或微信等其他线上渠道预定使用。</p>
				<p>3、免费房安排的房间将视当时酒店排房情况而p定，如您所预约的时段预订已满，将与您协商调整入住时间。</p>
				<p>4、免费房券及代金券不得用于除订房外其他产品消费，不得与酒店其他优惠折扣或礼券同时使用，且不予退换、兑换现金或找赎。</p>
				<p>5、对于恶意刷奖者和作弊者，主办方有权取消其兑奖资格。</p>
			</div>
		<div id="page2">
			<div class="p2-content">
				<div class="txt-img">
					<img src="img/wenzi.png" alt="">
					<img src="img/wenzi2.png" alt="">
					<img src="img/wenzi3.png" alt="">
				</div>
				<ul class="time">
					<li>0</li>
					<li>0</li>
					<li>0</li>
					<li>60</li>
				</ul>
				<div class="money-wrap">
					<img src="img/money.png" alt="" class="img">
					<img src="img/money.png" alt="" class="img">
					<img src="img/money.png" alt="" class="img">
					<img src="img/money.png" alt="" class="img">
				</div>
				<img src="img/huashou.png" alt="" class="huashou">
				<img src="img/foot.png" alt="" class="foot">
			</div>
		</div>
		<div id="page3">
			<div class="p3-content">
				<h1>888</h1>
				<p>你太客气了，这不是你的挑战极限吧</p>
				<p>
					<span>999</span>
					<span>62</span>
				</p>
				<ul class="p3-btn">
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="share-mask"></div>
		</div>
	</div>
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
      "onMenuShareAppMessage"
    ]
  });
  wx.ready(function () {
    // 在这里调用 API
    wx.onMenuShareAppMessage({
        title: '数钱赢大奖！', // 分享标题
        desc: '我一共数了'+count+'张钱，赶快来挑战我吧！！', // 分享描述
        link: 'http://1.lzxdemo1.applinzi.com/moneyGame/index.php', // 分享链接
        imgUrl: 'http://wx.qlogo.cn/mmopen/Abfr3GtrVDAp6eZrMNTHCTiavU1ZGaa7IdqUj9eU3MaFia3T8a8PR0SEkqro9YtS2q6hE6ONrqhia005hZcx0seic8BM1EYIah0L/0', // 分享图标
        type: '', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
        success: function () { 
            // 用户确认分享后执行的回调函数
        },
        cancel: function () { 
            // 用户取消分享后执行的回调函数
        }
    });

  });
</script>
</html>