<?php

/* 
 */
namespace guzuomuse\nicescroll;
use yii\web\AssetBundle;
//设置别名,setAlias
\Yii::setAlias('@nicescroll', dirname(__FILE__));
class NiceScrollAsset extends AssetBundle{
	public $sourcePath = '@nicescroll/assets/';

	public $js = [
		"js/jquery.nicescroll.min.js"
	];

	public $css = [
		
	];

//	public $publishOptions = [
//		'forceCopy' => true
//	];

	public $depends = [
		'yii\web\JqueryAsset',
	];    
}
