<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>扫码自助下载最新源码</title>
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<script src="qrlogin.js?ver=1003"></script>
</head>
<body>
<div class="container">
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
<div class="panel panel-primary">
	<div class="panel-heading" style="text-align: center;"><h3 class="panel-title">
		扫码自助下载最新源码
	</div>
	<div class="panel-body" style="text-align: center;">
		<div class="list-group">
			<div class="list-group-item">请使用你购买授权时的QQ扫描以下二维码，通过验证后即可下载更新包&安装包，扫码前需要关闭QQ网页保护。或者你也可以联系客服获取源码。</div>
			<div class="list-group-item list-group-item-info" style="font-weight: bold;" id="login">
				<span id="loginmsg">使用QQ手机版扫描二维码</span><span id="loginload" style="padding-left: 10px;color: #790909;">.</span>
			</div>
			<div class="list-group-item" id="qrimg">
			</div>
			<div class="list-group-item"><a href="#" onclick="loadScript();" class="btn btn-block btn-primary">点此验证</a></div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>