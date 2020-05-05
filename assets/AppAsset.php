<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/core.css',
        'css/shortcode/shortcodes.css',
        'css/style.css',
        'css/responsive.css',
        'css/custom.css',
    ];
    public $js = [
        'js/vendor/modernizr-2.8.3.min.js',
        'js/plugins.js',
        'js/waypoints.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.cookie.js',
        'js/slick.min.js',
        'js/jquery-ui.js',
        'js/jquery.accordion.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
