### Description
Library to convert html to markdown. Use like

	$markdown= Yii::$app->getModule('html2md')->convert($html);

A little check would of course be better:

	if (null == $h2m= Yii::$app->getModule('html2md'))
		show_error('html2md not installed or activivated. Shame!');
	else
		$markdown= $h2m->convert($html);

### Installation
Unzip the latest archive into */protected/modules folder, activate in Administration / Modules.

__Module website:__ <https://github.com/Themroc/humhub_html2md>

__Author:__ Themroc <7hemroc@gmail.com>

### Changelog

<https://github.com/Themroc/humhub_html2md/commits/master>

### Bugtracker

<https://github.com/Themroc/humhub_html2md/issues>

### ToDos

- 
