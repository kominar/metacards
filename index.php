<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/pub/css/normalize.css"/>
  <link rel="stylesheet" href="/pub/css/_style.css"/>
  <link rel="stylesheet" href="/pub/css/jquery-ui.css"/>
  <script src="/pub/js/jquery.js"></script>
  <script src="/pub/js/jquery-ui.min.js"></script>
  <script src="/pub/js/_script.js"></script>
  <title></title>
</head>

<body id="body">

<div class="content">
	<div class="content__main">
		<div class="table">

		</div>
		<div class="cards">
			<div id="cards" class="cards__body">
				<? $num = 1; while ($num <= 20) { ?>
					<div class="card" data-id="1"><img src="/uploads/cards/<?php echo $num; ?>.jpg"></div>
				<? $num++; } ?>
			</div>
		</div>
	</div>
	<div class="content__sidebar">
		<div class="sets">
			<? $num = 1; while ($num <= 10) { ?>
				<div class="set" data-id="1"><img src="/uploads/shirts/1.jpg"></div>
			<? $num++; } ?>
		</div>
	</div>
</div>

</body>
</html>
