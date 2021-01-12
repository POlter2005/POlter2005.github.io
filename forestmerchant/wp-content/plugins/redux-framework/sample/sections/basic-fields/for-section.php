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
		'title'            => esc_html__('"Для кого підходить" (5)', 'your-textdomain-here'),
		'id'               => 'for-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое описание секции', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'for__title',
				'type'     => 'text',
				'title'    => esc_html__('Тайтл секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Для кого підходить гра?',
			),
			array(
				'id'       => 'for__desc-title',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-1', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Особливо корисна вона дітям від 8-9 років.',
			),
			array(
				'id'       => 'for__desc-text-1',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-2', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Але "дядям та тьотям" за 40 вона буде також цікавою :)',
			),
			array(
				'id'       => 'for__desc-text-2',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-3', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Тим більше, якщо грати разом зі своїми дітьми чи онуками.',
			),
			
		)
	)
);
