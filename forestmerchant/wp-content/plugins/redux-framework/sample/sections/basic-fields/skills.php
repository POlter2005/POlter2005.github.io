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
		'title'            => esc_html__('Навыки (4)', 'your-textdomain-here'),
		'id'               => 'skills-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое описание секции', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'skills__title',
				'type'     => 'text',
				'title'    => esc_html__('Тайтл секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'ПІД ЧАС ГРИ "ЛІСОВІ КОМЕРСАНТИ" "ПРОКАЧУЮТЬСЯ" НЕОБХІДНІ ДЛЯ УСПІШНОГО ЖИТТЯ ОПЦІЇ:',
			),
			array(
				'id'       => 'skills__list-1',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-1', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- усний математичний рахунок, читання',
			),
			array(
				'id'       => 'skills__list-2',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-2', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- мистецтво переговорів, вміння комунікувати',
			),
			array(
				'id'       => 'skills__list-3',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-3', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- взаємодіяти в команді, артистичні здібності',
			),
			array(
				'id'       => 'skills__list-4',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-4', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- моделі прийняття ефективних рішень та багато іншого',
			),
			array(
				'id'       => 'bonus__title',
				'type'     => 'text',
				'title'    => esc_html__('нижнее описание 1', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Маленькі гравці пізнають ази фінансової грамотності, розвивають підприємницькі та лідерські навички.я',
			),
			array(
				'id'       => 'bonus__description',
				'type'     => 'text',
				'title'    => esc_html__('нижнее описание 2', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'І як бонус – діти починають краще розуміти батьків і більш шанобливо ставляться до грошей, які ними
				зароблені.',
			),
			
			

		)
	)
);
