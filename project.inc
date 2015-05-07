<?php
/**
 * Spark project settings
 * 
 * @author Oliver Rowlands <oliver@liquidlight.co.uk>
 * @copyright Liquid Light Digital Ltd.
 * @since 2009-11-08
 */
return ZyncHelper::arrayMergeRecursive(
	ZyncHelper::load(realpath($_ENV['ZYNC_PATH']).'/Project/Static/Default.inc'),
	array(
		'label' => 'Spark',
		'environments' => array(
		
			// Production environment
			'production' => array(
				'host' => array(
					'name' => 'spark',
				),
				'paths' => array(
					'html' => array(
						'root' => '/var/www/sparkconf.uk/html/',
					),
					'backup' => array(
						'root' => '/var/www/sparkconf.uk/backup/',
					),
				),
				'domains' => array(
					'sparkconf.uk',
				),
			),
			
			// Development environment
			'development' => array(
				'domains' => array(
					'www.spark.lldev.co.uk',
				)
			),
			
		),

		'actions' => array(

			// Push the website assets
			'push' => array(
				'paths' => array(
					'html' => array(
						'exclude' => array(
						),
					),
				),
			),

		),

	)
);
