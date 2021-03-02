<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "fsc_flexslider"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
		'title'              => 'Flexslider',
		'description'        => 'Flexslider as Fluid Sytled Content Element',
		'category'           => 'plugin',
		'shy'                => false,
		'version'            => '0.0.1',
		'dependencies'       => '',
		'conflicts'          => '',
		'priority'           => '',
		'loadOrder'          => '',
		'module'             => '',
		'state'              => 'beta',
		'uploadfolder'       => 0,
		'createDirs'         => '',
		'modify_tables'      => '',
		'clearcacheonload'   => true,
		'lockType'           => '',
		'author'             => 'tf',
		'author_email'       => 'feuerstein.rhp@gmail.com',
		'author_company'     => '',
		'CGLcompliance'      => null,
		'CGLcompliance_note' => null,
		'constraints'        => [
				'depends'   => [
						'typo3' => '8.7.32-8.7.99',
						'fluid_styled_content' => ''
				],
				'conflicts' => [],
				'suggests'  => []
		],
		'autoload' => [
				'psr-4' => [
						'TmFrstn\\FscFlexslider\\' => 'Classes',
				]
		]
];

?>