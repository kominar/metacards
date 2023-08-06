<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/pub/css/index.css"/>
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
			<div class="cards__tools">
				<div class="cards__bttn cards__bttn--toggle js-cards-toggle"></div>	
				<div class="cards__bttn cards__bttn--random js-cards-random"></div>		
				<div class="cards__bttn cards__bttn--turnover js-cards-turnover"></div>		
			</div>
			
			<div id="cards" class="cards__body">
				<? $num = 1; while ($num <= 20) { ?>
					<div class="card card--back" data-set="1" data-id="card-<? echo $num; ?>" style="display: block;">
						<div class="card__body">
							<div class="card__num"><? echo $num; ?></div>
							<img class="card__suit" src="/uploads/cards/1/<? echo $num; ?>.jpg">
							<img class="card__shirt" src="/uploads/cards/1/back.jpg">
							<div class="card__remove"></div>
						</div>
					</div>
				<? $num++; } ?>
				<? $num = 1; while ($num <= 20) { ?>
					<div class="card card--back" data-set="2" data-id="card-<? echo $num; ?>">
						<div class="card__body">
							<div class="card__num"><? echo $num; ?></div>
							<img class="card__suit" src="/uploads/cards/2/<? echo $num; ?>.jpg">
							<img class="card__shirt" src="/uploads/cards/2/back.jpg">
							<div class="card__remove"></div>
						</div>
					</div>
				<? $num++; } ?>
				<? $num = 1; while ($num <= 20) { ?>
					<div class="card card--back" data-set="3" data-id="card-<? echo $num; ?>">
						<div class="card__body">
							<div class="card__num"><? echo $num; ?></div>
							<img class="card__suit" src="/uploads/cards/3/<? echo $num; ?>.jpg">
							<img class="card__shirt" src="/uploads/cards/3/back.jpg">
							<div class="card__remove"></div>
						</div>
					</div>
				<? $num++; } ?>
			</div>
		</div>

		<div class="content__sidebar">
			<div class="sets">
				<div class="sets__tools">
					<div class="sets__bttn sets__bttn--toggle js-sets-toggle"></div>		
				</div>

				<? $num = 1; while ($num <= 3) { ?> <? $num++; } ?>
				<div class="set active" data-id="1">
					<img src="/uploads/cards/1/back.jpg">
					<div class="set__label">
						<div class="set__name">ТАРО</div>
					</div>
				</div>
				<div class="set" data-id="2">
					<img src="/uploads/cards/2/back.jpg">
					<div class="set__label">
						<div class="set__name">Кошечки</div>
					</div>
				</div>
				<div class="set" data-id="3">
					<img src="/uploads/cards/3/back.jpg">
					<div class="set__label">
						<div class="set__name">Декамерон</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

</div>

</body>
</html>
