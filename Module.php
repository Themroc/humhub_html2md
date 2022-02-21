<?php

namespace themroc\humhub\modules\html2md;

/**
 * @inheritdoc
 */
class Module extends \humhub\components\Module
{
	/**
	 * @inheritdoc
	 */
	public function disable ()
	{
		// Cleanup all module data, don't remove the parent::disable()!!!
		parent::disable();
	}

	function convert ($html, $options= null)
	{
		require_once(__DIR__ . '/lib/vendor/autoload.php');

		// see lib/vendor/league/html-to-markdown/README.md for possible options
		$defaults= [
			'strip_tags' => 1,
#			 'hard_break' => 1,

			// HumHub-style:
			'italic_style' => '*',
			'bold_style' => '**',
		];

		$conv= new HtmlConverter(isset($options) ? $options : $defaults);

		return $conv->convert($html);
	}
}
