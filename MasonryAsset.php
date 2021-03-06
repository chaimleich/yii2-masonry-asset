<?php
/**
 * @copyright Copyright (c); nerburish, 2016
 * @package yii2-masonry-asset
 */

namespace nerburish\masonry;

use yii\web\AssetBundle;

/**
 * Asset bundle for Masonry.js (http://masonry.desandro.com/)
 *
 * @package nerburish\masonry
 */
class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-masonry';
    
    public $js = [
        'jquery.masonry.min.js',
    ];
	
    public $depends = [
        'yii\web\JqueryAsset'
    ];	
}
