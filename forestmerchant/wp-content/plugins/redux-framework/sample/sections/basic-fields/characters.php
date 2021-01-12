<?php

/**
 * Redux Framework checkbox config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Персонажи игры (3)', 'your-textdomain-here'),
		'id'               => 'character-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое описание секции', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'character__section-title',
				'type'     => 'text',
				'title'    => esc_html__('название секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Персонажі гри',
			),
			array(
				'id'       => 'character__list-title_1',
				'type'     => 'text',
				'title'    => esc_html__('название секции "Ведмідь"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Справедливий Ведмідь/Ведмедиця',
			),
			array(
				'id'       => 'character__list-desc_1',
				'type'     => 'text',
				'title'    => esc_html__('описание секции "Ведмідь"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'як справжній хазяїн лісу контролює всі бізнес-операції з грошима,<br>
				відповідає за справедливість та порядок під час гри.',
			),
			array(
				'id'       => 'character__list-title_2',
				'type'     => 'text',
				'title'    => esc_html__('название секции "Чесний Вовк"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Чесний Вовк/Вовчиця',
			),
			array(
				'id'       => 'character__list-desc_2',
				'type'     => 'text',
				'title'    => esc_html__('описание секции "Чесний Вовк"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'виконуючи роль податківця, має чесно рахувати та слідкувати, <br>щоб з кожної
				угоди сплачувались податки.',
			),
			array(
				'id'       => 'character__list-title_3',
				'type'     => 'text',
				'title'    => esc_html__('название секции "Швидкий Орел"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Швидкий Орел/Орлиця',
			),
			array(
				'id'       => 'character__list-desc_3',
				'type'     => 'text',
				'title'    => esc_html__('описание секции "Швидкий Орел"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'має швидко доставляти (читати вголос) повідомлення для всіх,<br> тому що він
				власних фірми "Птахофлот"',
			),
			array(
				'id'       => 'character__list-title_4',
				'type'     => 'text',
				'title'    => esc_html__('название секции "Благородний Олень"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Благородний Олень/Олениха',
			),
			array(
				'id'       => 'character__list-desc_4',
				'type'     => 'text',
				'title'    => esc_html__('описание секции "Благородний Олень"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'займається благородною справою - допомагає та турбується про тих хто опинився в
				скрутному становищі.',
			),
			array(
				'id'       => 'character__list-title_5',
				'type'     => 'text',
				'title'    => esc_html__('название секции "Мудрий Лис"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Мудрий Лис/Лисичка',
			),
			array(
				'id'       => 'character__list-desc_5',
				'type'     => 'text',
				'title'    => esc_html__('описание секции "Мудрий Лис"', 'your-textdomain-here'),
				'subtitle' => esc_html__('', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'мудрий мисливець-підприємець - полює на вигідні бізнеси,<br> інвестує кошти та
				розвиває власну справу<br>або продає свої послуги іншим гравцям.',
			),
			
			

		)
	)
);
