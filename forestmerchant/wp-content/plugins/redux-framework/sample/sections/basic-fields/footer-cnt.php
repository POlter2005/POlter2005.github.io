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
		'title'            => esc_html__('Подвал (9)', 'your-textdomain-here'),
		'id'               => 'footer-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое описание секции', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'footer__title',
				'type'     => 'text',
				'title'    => esc_html__('Тайтл секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Замовляйте гру "Лісові Комерсанти"',
			),
			array(
				'id'       => 'footer__text',
				'type'     => 'text',
				'title'    => esc_html__('Текст секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Ціна інвестиції у майбутнє вашої дитини 590 грн!',
			),
			
		

		)
	)
);