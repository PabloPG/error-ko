<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
<style>
	html {height: 100%;width:100%;overflow:hidden;}
	body {
		min-height: 100%;
		font-family: Tahoma,Verdana,Segoe,sans-serif;
        background: #F5F5F5;
	}

	#wrapper {
		position: relative;
		width: 100%;
        max-width: 550px;
		text-align: center;
		margin: 15% auto;
	}

	.container {
        padding: 25px;
    }

    .container h2 {
	    font-size: 14pt;
        padding: 10px 14px;
        background-color: #FFF;
        border-radius: 2px;
        box-shadow: 0px 1px 6px #D0D0D0 inset;
        color: #828282;
        padding: 12px;
	}

	.container h3 {
        color: #E91E63;
        font-size: 20pt;
        font-weight: bold;
        margin: 0;
    }

</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="container">
			<h3><?php echo $message ?></h3>
			<h2><?php echo $page ?></h2>
		</div>
	</div>
</body>
</html>