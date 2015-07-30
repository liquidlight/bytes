<?php
/**
 * Bytes project settings
 * 
 * @author Oliver Rowlands <oliver@liquidlight.co.uk>
 * @copyright Liquid Light Digital Ltd.
 * @since 2009-11-08
 */
return ZyncHelper::arrayMergeRecursive(
	ZyncHelper::load(realpath($_ENV['ZYNC_PATH']).'/Project/Static/Default.inc'),
	array(
		'label' => 'Bytes',
		'environments' => array(
		
			// Production environment
			'production' => array(
				'host' => array(
					'name' => 'bytes',
				),
				'paths' => array(
					'html' => array(
						'root' => '/var/www/bytesconf.co.uk/html/',
					),
					'backup' => array(
						'root' => '/var/www/bytesconf.co.uk/backup/',
					),
				),
				'domains' => array(
					'bytesconf.co.uk',
				),
			),
			
			// Development environment
			'development' => array(
				'domains' => array(
					'www.bytes.lldev.co.uk',
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
