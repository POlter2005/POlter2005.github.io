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
		'title'            => esc_html__('"Відгуки" и "Спільнота" секция (8)', 'your-textdomain-here'),
		'id'               => 'forum-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое описание секции', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'forum__title',
				'type'     => 'text',
				'title'    => esc_html__('Тайтл секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Відгуки про гру',
			),
			array(
				'id'       => 'social-net__title-1',
				'type'     => 'text',
				'title'    => esc_html__('Текст секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Долучайтеся до нашої спільноти в:',
			),
			array(
				'id'       => 'social-net__title-2',
				'type'     => 'text',
				'title'    => esc_html__('Текст секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Також слідкуйте за останніми новинами від видавника Вожжова Сергія в:',
			),
			
			

		)
	)
);