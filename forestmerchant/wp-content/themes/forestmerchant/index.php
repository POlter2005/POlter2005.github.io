<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forestmerchant
 */

get_header();
?>

<div class="hr__line"></div>
<section class="section-information" id="section2">

	<div class="hr hr_1"></div>
	<div class="section__title">
		<h2 class="section__title_1"><?php echo $redux_demo['info-title-1']; ?></h2>
		<h2 class="section__title_2"><?php echo $redux_demo['info-title-2']; ?></h2>
	</div>
	<div class="hr hr_2"></div>
	<p class="section__description">
		<?php echo $redux_demo['info-desc']; ?>
	</p>
	<div class="section__information">
		<h3 class="information__title">
			<?php echo $redux_demo['info-content-desc']; ?>
		</h3>
		<div class="information__list">
			<div class="information__list_1">
				<div class="information__link">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/5ev_couple.svg" alt="icon" class="link__img lazyload" width="100" height="100">
					<p class="list__text"><?php echo $redux_demo['info-link-1']; ?></p>
				</div>
				<div class="information__link">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Layer_1.svg" alt="icon" class="link__img lazyload" width="100" height="100">
					<p class="list__text"><?php echo $redux_demo['info-link-2']; ?></p>
				</div>
			</div>
			<div class="information__list_2">
				<div class="information__link">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/social_networks.svg" alt="icon" class="link__img lazyload" width="100" height="100">
					<p class="list__text"><?php echo $redux_demo['info-link-3']; ?></p>
				</div>
				<div class="information__link">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/cowork_startup.svg" alt="icon" class="link__img lazyload" width="100" height="100">
					<p class="list__text"><?php echo $redux_demo['info-link-4']; ?></p>
				</div>
			</div>
			<div class="information__list_3">
				<div class="information__link">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Tilda_Icons_37_Finance_technologies_moneybag.svg" alt="icon" class="link__img lazyload" width="100" height="100">
					<p class="list__text"><?php echo $redux_demo['info-link-5']; ?></p>
				</div>
				<div class="information__link">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/25fn_moneybox.svg" alt="icon" class="link__img lazyload" width="100" height="100">
					<p class="list__text"><?php echo $redux_demo['info-link-6']; ?></p>
				</div>
			</div>
		</div>
		<div class="section__link">
			<a href="#section6" class="section__btn"><?php echo $redux_demo['btn']; ?></a>
		</div>
	</div>

</section>


</div>
<div class="slider__section">
	<div class="sim-slider" id="slidercnt">
		<ul class="sim-slider-list">
			<li class="sim-slider-element"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/LK_sait_kvadrat-03.webp" alt="first-slider" width="360" height="360" class="lazyload">
			</li>
			<li class="sim-slider-element"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/LK_sait_kvadrat-04.webp" alt="second-slider" width="360" height="360" class="lazyload">
			</li>
			<li class="sim-slider-element"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/LK_sait_kvadrat-05.webp" alt="third-slider" width="360" height="360" class="lazyload">
			</li>
		</ul>
		<div class="sim-slider-arrow-left"><i class="fas fa-arrow-left"></i></div>
		<div class="sim-slider-arrow-right"><i class="fas fa-arrow-right"></i></div>
	</div>
</div>
<section class="character__section" id="section3">
	<h2 class="character__section-title"><?php echo $redux_demo['character__section-title']; ?></h2>
	<div class="character__container">
		<div class="character__img img_anim-1"><img src="data:image/gif;base64,R0lGODlhDgANAIAAAP///wAAACH5BAEAAAEALAAAAAAOAA0AAAIMjI+py+0Po5y02lcAADs=" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Lisovi_Komers_20_ved.webp" alt="Bear" width="168" height="156" class="lazyload"></div>
		<div class="character__text text_anim-1">
			<h3 class='character__title'><?php echo $redux_demo['character__list-title_1']; ?></h3>
			<p class="character__desc"><?php echo $redux_demo['character__list-desc_1']; ?></p>
		</div>
	</div>
	<div class="character__container">
		<div class="character__img __1 img_anim-2"><img src="data:image/gif;base64,R0lGODlhxQCzAIAAAP///wAAACH5BAEAAAEALAAAAADFALMAAALyjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBtaKAAAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Lisovi_Komers_20_vov.webp" alt="Wolf" class="lazyload" width="197" height="179"></div>
		<div class="character__text text_anim-2">
			<h3 class='character__title'><?php echo $redux_demo['character__list-title_2']; ?></h3>
			<p class="character__desc"><?php echo $redux_demo['character__list-desc_2']; ?></p>
		</div>



	</div>
	<div class="character__container">
		<div class="character__img img_anim-3"><img class="lazyload" width="197" height="138" src="data:image/gif;base64,R0lGODlhxQCKAIAAAP///wAAACH5BAEAAAEALAAAAADFAIoAAALPjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7OLloAADs=" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Lisovi_Komers_20_ore.webp" alt="Eagle"></div>
		<div class="character__text text_anim-3">
			<h3 class='character__title'><?php echo $redux_demo['character__list-title_3']; ?></h3>
			<p class="character__desc"><?php echo $redux_demo['character__list-desc_3']; ?></p>
		</div>
	</div>
	<div class="character__container">
		<div class="character__img __1 img_anim-4"><img class="lazyload" width="177" height="190" src="data:image/gif;base64,R0lGODlhsQC+AIAAAP///wAAACH5BAEAAAEALAAAAACxAL4AAALqjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsa/FYAADs=" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Lisovi_Komers_20_Ole.webp" alt="deer"></div>
		<div class="character__text text_anim-4">
			<h3 class='character__title'><?php echo $redux_demo['character__list-title_4']; ?></h3>
			<p class="character__desc"><?php echo $redux_demo['character__list-desc_4']; ?></p>
		</div>

	</div>
	<div class="character__container">
		<div class="character__img img_anim-5"><img class="lazyload" width="239" height="185" src="data:image/gif;base64,R0lGODlh7wC5AIAAAP///wAAACH5BAEAAAEALAAAAADvALkAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8YXjRw7evwIMqTIkSRLmjyJMqXKlSwPFgAAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Lisovi_Komers_20_Lis.png" alt="fox">
		</div>
		<div class="character__text text_anim-5">
			<h3 class='character__title'><?php echo $redux_demo['character__list-title_5']; ?></h3>
			<p class="character__desc"><?php echo $redux_demo['character__list-desc_5']; ?></p>
		</div>
	</div>
</section>

<div class="sklills__bg">
	<section class="skills__section" id="section4">
		<div class="skills__img">
			<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/__instagram_10801080.webp" alt="game_picture" class="skills-image lazyload">
		</div>
		<div class="skills__description">
			<h3 class="skills__title">
				<?php echo $redux_demo['skills__title']; ?>
			</h3>
			<ul class="skills__list">
				<li class="skills__link"><?php echo $redux_demo['skills__list-1']; ?></li>
				<li class="skills__link"><?php echo $redux_demo['skills__list-2']; ?></li>
				<li class="skills__link"><?php echo $redux_demo['skills__list-3']; ?></li>
				<li class="skills__link"><?php echo $redux_demo['skills__list-4']; ?></li>
			</ul>
			<div class="skills__bonus">
				<h4 class="bonus__title">
					<?php echo $redux_demo['bonus__title']; ?>
				</h4>
				<p class="bonus__description">
					<?php echo $redux_demo['bonus__description']; ?>
				</p>
			</div>
		</div>
	</section>
</div>


<section class="for__section">
	<h2 class="for__title"><?php echo $redux_demo['for__title']; ?></h2>
	<div class="for__section-desc">
		<div class="for__description">
			<div class="for__desc-text">
				<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" alt="kid" data-src="<?php bloginfo('template_directory'); ?>/assets/img/kideducate_kid.svg" class="text__img lazyload">
				<h3 class="for__desc-title">
					Гра для дітей від 6 років.
				</h3>
				<p class="for__desc-title">
					<strong><?php echo $redux_demo['for__desc-title']; ?></strong>
				</p>
			</div>
			<div class="for__desc-text">
				<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" alt="diploma" data-src="<?php bloginfo('template_directory'); ?>/assets/img/kideducate_diploma.svg" class="text__img lazyload">
				<h3 class="for__desc-title">
					<?php echo $redux_demo['for__desc-text-1']; ?>
				</h3>
				<p class="for__desc-title">
					<strong><?php echo $redux_demo['for__desc-text-2']; ?></strong>
				</p>
			</div>
		</div>
		<div class="for__desc-img">
			<img src="data:image/gif;base64,R0lGODlhLQAmAIAAAP///wAAACH5BAEAAAEALAAAAAAtACYAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvd9AQA7" alt="reaction_screen" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_3.webp" class="for-img lazyload">
		</div>
	</div>
</section>
<section class="game-do__section">
	<div class="game-do__section-desc">
		<div class="game-do__description">
			<h2 class="game-do__title"><?php echo $redux_demo['game-do__title']; ?></h2>
			<p class="game-do__desc-text">
				<?php echo $redux_demo['game-do__desc-text-1']; ?>
			</p>
			<p class="game-do__desc-text bolt-text">
				<?php echo $redux_demo['game-do__desc-text-2']; ?>
			</p>
			<p class="game-do__desc-text">
				<?php echo $redux_demo['game-do__desc-text-3']; ?>
			</p>
		</div>
		<div class="game-do__desc-img">
			<img src="data:image/gif;base64,R0lGODlhCgABAIAAAP///wAAACH5BAEAAAEALAAAAAAKAAEAAAIDjI8FADs=" alt="game_screen" data-src="<?php bloginfo('template_directory'); ?>/assets/img/__instagram_10801080.webp" class="game-do-img lazyload">
		</div>
	</div>
</section>
<div class="complect_bg">
	<section class="complect__section" id="section5">
		<div class="complect__section_img">
			<img src="data:image/gif;base64,R0lGODlhCgABAIAAAP///wAAACH5BAEAAAEALAAAAAAKAAEAAAIDjI8FADs=" data-src="<?php bloginfo('template_directory'); ?>/assets/img/LisoviKomersanti_moc.webp" alt="game_box" class="complect-img lazyload">
		</div>
		<div class="complect__section_desc">
			<div class="complect__section_title">
				<h2><?php echo $redux_demo['complect__title']; ?></h2>
			</div>
			<ul class="complect__section_list">
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-1']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-2']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-3']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-4']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-5']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-6']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-7']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-8']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-9']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-10']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-11']; ?></li>
				<li class="complect__section_link"><?php echo $redux_demo['complect__link-12']; ?></li>
			</ul>
		</div>
	</section>
</div>

<section class="form__section" id="section6">
	<div class="bg-color">
		<form action="telegram.php" method="POST">
			<h2 class='legend'>Замовити гру</h2>

			<div class="form-container">
				<label for="user_name">Введіть ваше ім'я та прізвище</label><br>
				<input type="text" id="user_name" name="user_name" class="form__input" placeholder="Ім'я Прізвище" autocomplete="on" tabindex="0" required>
			</div>
			<div class="form-container">
				<label for="user_phone">Введіть ваш номер телефону</label><br>
				<input type="text" id="user_phone" name="user_phone" class="form__input" placeholder="телефон" tabindex="1" autocomplete="on" required>
			</div>
			<div class="form-container">
				<label for="user_quantity">Вкажіть кількість:</label>
				<div class="quantity__cnt">

					<input type="text" name="user_quantity" id="user_quantity" class="form__input" value="1" tabindex="2" required>


				</div>
				<div class="form-container">
					<textarea name="user_place" class="textarea" cols="30" rows="10" placeholder="Вкажіть адресу для доставки (місто та номер відділення Нової пошти)" tabindex="3" autocomplete="on" required></textarea>
				</div>
				<div class="form-container">
					<input type="text" name="user_promocode" class="form__input promocode_form" placeholder="Якщо маєте ПРОМОКОД, вкажіть його сюди" tabindex="4">
				</div>
				<div class="button__container">
					<button type="submit" name="submit" class="form__button mail-btn" onclick="window.location.href = 'index.php'">замовити</button>
				</div>

		</form>
	</div>
</section>


<section class="reaction__section">
	<h2 class="reaction__title">
		<?php echo $redux_demo['forum__title']; ?>
	</h2>
	<div class="reaction__wrapper">
		<div class="reaction__column">
			<div class="reaction__container">
				<img src="data:image/gif;base64,R0lGODlhGAAjAIAAAP///wAAACH5BAEAAAEALAAAAAAYACMAAAIbjI+py+0Po5y02ouz3rz7D4biSJbmiabqymIFADs=" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_10.webp" alt="reaction_screenshot" class="reaction__img lazyload">
			</div>
			<div class="reaction__container">
				<img src="data:image/gif;base64,R0lGODlhRwBMAIAAAP///wAAACH5BAEAAAEALAAAAABHAEwAAAJQjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvXrAIAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_9.webp" alt="reaction_screenshot" class="reaction__img lazyload">
			</div>
			<div class="reaction__container">
				<img src="data:image/gif;base64,R0lGODlhRwAYAIAAAP///wAAACH5BAEAAAEALAAAAABHABgAAAIojI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvd3AQA7" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_6.webp" alt="reaction_screenshot" class="reaction__img lazyload">
			</div>
		</div>
		<div class="reaction__column">
			<div class="reaction__container">
				<img src="data:image/gif;base64,R0lGODlhRwBNAIAAAP///wAAACH5BAEAAAEALAAAAABHAE0AAAJRjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7EUBADs=" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_13.webp" alt="reaction_screenshot" class="reaction__img lazyload">
			</div>
			<div class="reaction__container">
				<img src="data:image/gif;base64,R0lGODlhJAAjAIAAAP///wAAACH5BAEAAAEALAAAAAAkACMAAAIijI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNdnAQA7" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_14.webp" alt="reaction_screenshot" class="reaction__img lazyload">
			</div>
			<div class="reaction__container">
				<div class="reaction__container_mini">
					<img src="data:image/gif;base64,R0lGODlhRwAhAIAAAP///wAAACH5BAEAAAEALAAAAABHACEAAAIxjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8VgsAAA7" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_5.webp" alt="reaction_screenshot" class="reaction__img lazyload">
				</div>
				<div class="reaction__container_mini">
					<img src="data:image/gif;base64,R0lGODlhWQAqAIAAAP///wAAACH5BAEAAAEALAAAAABZACoAAAJAjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1eCwA7" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_8.webp" alt="reaction_screenshot" class="reaction__img lazyload">
				</div>
			</div>
		</div>
		<div class="reaction__column col_3">
			<div class="reaction__container">
				<div class="reaction__container">
					<img src="data:image/gif;base64,R0lGODlhRwA+AIAAAP///wAAACH5BAEAAAEALAAAAABHAD4AAAJHjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOjwoAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_12.webp" alt="reaction_screenshot" class="reaction__img lazyload">
				</div>



				<div class="reaction__container">
					<img src="data:image/gif;base64,R0lGODlhJQApAIAAAP///wAAACH5BAEAAAEALAAAAAAlACkAAAImjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jec6WQAAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_4.webp" alt="reaction_screenshot" class="reaction__img lazyload">
				</div>


				<div class="reaction__container">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/Screenshot_4-1.webp" alt="reaction_screenshot" class="reaction__img lazyload">
				</div>
			</div>
		</div>

	</div>
</section>
<section class="social-net__section">
	<div class="social-net__content">
		<h2 class="social-net__title">
			<?php echo $redux_demo['social-net__title-1']; ?>
		</h2>
		<ul class="social-net__list">
			<li class="social-net__link"><a target="_blank" href="https://www.facebook.com/forestmerchants/"><span>Фейсбук</span><br><i class="fab fa-facebook-square"></i></a></li>
			<li class="social-net__link"><a target="_blank" href="https://www.instagram.com/forest_merchants/"><span>Інстаграм</span><br><i class="fab fa-instagram"></i></a></li>
		</ul>
	</div>
	<div class="social-net__content">
		<h2 class="social-net__title">
			<?php echo $redux_demo['social-net__title-2']; ?>
		</h2>
		<ul class="social-net__list">
			<li class="social-net__link"><a target="_blank" href="https://www.facebook.com/ser.vozzov/"><span>Фейсбук</span><br><i class="fab fa-facebook-square"></i></a></li>
			<li class="social-net__link"><a target="_blank" href="https://youtube.com/user/SerVozzov"><span>Ютуб</span><br><i class="fab fa-youtube"></i></a></li>
		</ul>
	</div>
</section>

<?php
get_footer();
