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
		'title'            => esc_html__('"комплект" секция (7)', 'your-textdomain-here'),
		'id'               => 'complect-section',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__('Введите краткое описание секции', 'your-textdomain-here'),
		'fields'           => array(
			array(
				'id'       => 'complect__title',
				'type'     => 'text',
				'title'    => esc_html__('Тайтл секции', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => 'Ігровий комплект:',
			),
			array(
				'id'       => 'complect__link-1',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-1', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Коробка',
			),
			array(
				'id'       => 'complect__link-2',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-2', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Лоток для банку',
			),
			array(
				'id'       => 'complect__link-3',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-3', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Ігрове поле',
			),
			array(
				'id'       => 'complect__link-4',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-4', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Брошюра правил',
			),
			array(
				'id'       => 'complect__link-5',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-5', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Фішки ігрові (5шт)',
			),
			array(
				'id'       => 'complect__link-6',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-6', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Картки легенд (5шт)',
			),
			array(
				'id'       => 'complect__link-7',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-7', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Картка ігрових полей',
			),
			array(
				'id'       => 'complect__link-8',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-8', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Ігрові картки "Інвестиції" (32шт)',
			),
			array(
				'id'       => 'complect__link-9',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-9', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Ігрові картки "Лікарня" (8шт)',
			),
			array(
				'id'       => 'complect__link-10',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-10', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Ігрові картки "Витрати" (8шт)',
			),
			array(
				'id'       => 'complect__link-11',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-11', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Ігрові картки "Повідомлення" (16шт)',
			),
			array(
				'id'       => 'complect__link-12',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-12', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Комплект ігрових грошей',
			),
			array(
				'id'       => 'complect__link-13',
				'type'     => 'text',
				'title'    => esc_html__('описание листа-13', 'your-textdomain-here'),
				'subtitle' => esc_html__('введите описание', 'your-textdomain-here'),
				'desc'     => esc_html__('краткое описание', 'your-textdomain-here'),
				'default'  => '- Кубик ігровий',
			),
	
			
			

		)
	)
);
