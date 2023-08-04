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
  <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/godswearhats/jquery-ui-rotatable@1.1/jquery.ui.rotatable.css">
  <script src="https://cdn.jsdelivr.net/gh/godswearhats/jquery-ui-rotatable@1.1/jquery.ui.rotatable.min.js"></script>
  <script src="/pub/js/_script.js"></script>
  <title>Metacards</title>
</head>

<body id="body">

<div class="content">

<div class="bgBlock">
	Цвет <br />
	<input id="bgcolor" name="bgcolor" type="color" value="#000" /> <br />
	
	<label for="bgimg">
		Изображение <br />
		<img src="/pub/img/bgimg.png" alt="">
	</label>
	<input id="bgimg" name="bgimg" type="file">
</div>

	<div class="content__main">
		<div class="table">

		</div>

		<div class="cards">
			<div id="cards" class="cards__body">
				<? $num = 1; while ($num <= 20) { ?>
					<div class="card" data-set="1" data-id="card-<? echo $num; ?>" style="display: block;">
						<div class="card__body">
							<img class="card__suit" src="/uploads/cards/1/<? echo $num; ?>.jpg">
							<img class="card__shirt" src="/uploads/cards/1/back.jpg">
							<div class="card__remove"></div>
						</div>
					</div>
				<? $num++; } ?>
				<? $num = 1; while ($num <= 20) { ?>
					<div class="card" data-set="2" data-id="card-<? echo $num; ?>">
						<div class="card__body">
							<img class="card__suit" src="/uploads/cards/2/<? echo $num; ?>.jpg">
							<img class="card__shirt" src="/uploads/cards/2/back.jpg">
							<div class="card__remove"></div>
						</div>
					</div>
				<? $num++; } ?>
				<? $num = 1; while ($num <= 20) { ?>
					<div class="card" data-set="3" data-id="card-<? echo $num; ?>">
						<div class="card__body">
							<img class="card__suit" src="/uploads/cards/3/<? echo $num; ?>.jpg">
							<img class="card__shirt" src="/uploads/cards/3/back.jpg">
							<div class="card__remove"></div>
						</div>
					</div>
				<? $num++; } ?>
			</div>
		</div>
	</div>

	<div class="content__sidebar">
		<div class="sets">
			<? $num = 1; while ($num <= 3) { ?>
				<div class="set <? if ($num == 1) {?>active<?}?>" data-id="<? echo $num; ?>"><img src="/uploads/cards/<? echo $num; ?>/back.jpg"></div>
			<? $num++; } ?>
		</div>
	</div>

</div>

</body>
</html>
