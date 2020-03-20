<?php
namespace yii2assets\printthis;

use yii\web\AssetBundle;

class PrintThisAsset extends AssetBundle
{
    public $sourcePath = '@bower/print-this';

    public $js = [
        '//code.jquery.com/jquery-migrate-3.1.0.min.js',
		    'printThis.js',
	  ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
