<header class="header">
	<div class="container-fluid">
		<div class="header__item header__logo">
			<a href="/" class="logo">
				<span>MyLingua</span>
			</a>
		</div>
		<div class="header__item header__nav">
			<nav class="nav">
				<div class="nav__item">
					<a href="" class="nav__link">Курсы оффлайн</a>
				</div>
				<div class="nav__item">
					<a href="" class="nav__link">Курсы онлайн</a>
				</div>
				<div class="nav__item">
					<a href=""class="nav__link">Уроки по Skype</a>
				</div>
			</nav>
		</div>
		<div class="header__right header__nav">
			<div class="header__item header__phone">
				<a href="tel:+79131092684" class="phone">8 913 109-26-84</a>
			</div>
			<div class="header__item header__lang dropdown" role="group" aria-label="Выбор языка" style="width: 70px;">
				<a href="" class="nav__link" id="currency_choose" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h6 class="dropdown-toggle"><?php if(empty($_SESSION['curr_p'])){echo "₽";}else{echo $_SESSION['curr_p'];} ?></h6></a>
				<div class="dropdown-menu" aria-labelledby="currency_choose">
					<a class="dropdown-item curr" href="#">₽</a>
					<a class="dropdown-item curr" href="#">$</a>
					<a class="dropdown-item curr" href="#">€</a>
				</div>
				<input type="hidden" class="input-hidden" name="currency_choose" />
			</div>
			<div class="header__item header__lang dropdown" role="group" aria-label="Выбор языка" style="width: 70px;">
				<a href="" class="nav__link" id="lang_choose" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h6 class="dropdown-toggle"><?php if(empty($_SESSION['lang_p'])){echo "🇷🇺";}else{echo $_SESSION['lang_p'];} ?></h6></a>
				<div class="dropdown-menu" aria-labelledby="lang_choose">
					<a class="dropdown-item flags" href="#">🇷🇺</a>
					<a class="dropdown-item flags" href="#">🇱🇷</a>
					<a class="dropdown-item flags" href="#">🇪🇸</a>
					<a class="dropdown-item flags" href="#">🇫🇷</a>
				</div>
				<input type="hidden" class="input-hidden" name="lang_choose" />
			</div>
			<a style="display: none;" href="" id="change_lang"></a>
		</div>
	</div>
</header
