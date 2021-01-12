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
		'title'            => esc_html__('Информационная секция (2)', 'your-textdomain-here'),
		'id'               => 'basic-info-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое оптсание игры', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'info-title-1',
				'type'     => 'text',
				'title'    => esc_html__('описание тайтла 1', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Гру "Лісові Комерсанти" ми створили для дітей.',
			),
			array(
				'id'       => 'info-title-2',
				'type'     => 'text',
				'title'    => esc_html__('описание тайтла 2', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Чому для нас це стало важливо?',
			),
			array(
				'id'       => 'info-desc',
				'type'     => 'text',
				'title'    => esc_html__('описание секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  =>	'Ми побачили, що всі діти навколо грають в економічну гру, де закладений принцип "знищ свого сусіда".
				Тобто, щоб стати успішним, треба збанкрутувати інших гравців і лише так ти виграєш.
				Ви всі знаєте цю гру, бо всі діти грають в неї.',
			),
			
			

		)
	)
);
