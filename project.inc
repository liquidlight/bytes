<?php
/**
 * Bytes project settings
 *
 * @author Oliver Rowlands <oliver@liquidlight.co.uk>
 * @copyright Liquid Light Group Ltd.
 * @since 2009-11-08
 */
return ZyncHelper::arrayMergeRecursive(
	ZyncHelper::load(realpath($_ENV['ZYNC_PATH']).'/Project/Static/Default.inc'),
	[
		'label' => 'Bytes',
		'environments' => [

			// Production environment
			'production' => [
				'options' => [
					'skip-favicon' => true
				],
				'host' => [
					'name' => 'bytes',
				],
				'paths' => [
					'html' => [
						'root' => '/var/www/bytesconf.co.uk/html/',
					],
					'backup' => [
						'root' => '/var/www/bytesconf.co.uk/backup/',
					],
				],
				'domains' => [
					'www.bytesconf.co.uk',
				],
			],

			// Development environment
			'development' => [
				'domains' => [
					'www.bytes.lldev.co.uk',
				]
			],

		],

	]
);