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
		'title'            => esc_html__('Описание игры (1)', 'your-textdomain-here'),
		'id'               => 'basic-description',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое оптсание игры', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'text',
				'type'     => 'text',
				'title'    => esc_html__('описание', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Краща гра про фінансову грамотність для дітей',
			),
			array(
				'id'       => 'theme',
				'type'     => 'text',
				'title'    => esc_html__('жанр', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите жанр', 'your-textdomain-here'),
				'default'  => 'ФІНАНСОВО-ЕКОНОМІЧНА ГРА',
			),
			array(
				'id'       => 'btn',
				'type'     => 'text',
				'title'    => esc_html__('название кнопки', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите название кнопки', 'your-textdomain-here'),
				'default'  => 'Замовити гру',
			),
			

		)
	)
);
