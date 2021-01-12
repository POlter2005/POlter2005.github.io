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
		'title'            => esc_html__('"game-do" секция (6)', 'your-textdomain-here'),
		'id'               => 'game-do-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое описание секции', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'game-do__title',
				'type'     => 'text',
				'title'    => esc_html__('Тайтл секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'ПРОПОНУЄМО ВАМ ДОЛУЧИТИСЬ ДО ГРИ РАЗОМ З ДІТЬМИ.',
			),
			array(
				'id'       => 'game-do__desc-text-1',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-1', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Повірте, це буде дуже чарівний час,
				який ви можете провести не просто разом,
				а з спільною цікавою та корисною ігровою справою!',
			),
			array(
				'id'       => 'game-do__desc-text-2',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-2', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'В «Лісові Комерсанти» можна грати в родинному колі
				чи з друзями в школі, під час мандрівки в потягу чи під час відпочинку на галявині, коли за вікном негода
				чи коли світить сонечко,
				вранці, вдень та ввечері, взимку та влітку…',
			),
			array(
				'id'       => 'game-do__desc-text-3',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-3', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Можна грати годинку, а можна декілька годин,
				головне – в цю гру можна грати багато разів
				і кожен раз відкривати для себе якісь нові ігрові можливості
				та розвивати в собі нові якості.
				Тому – просто починайте грати!',
			),
			
			
			

		)
	)
);
