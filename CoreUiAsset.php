<?php

namespace seisvalt\coreui;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CoreUiAsset extends AssetBundle
{
    public $sourcePath = '@seisvalt/coreui/assets';
    public $css = [
        "css/site.css",
    ];
    public $js = [
    ];
    public $depends = [
        BaseAsset::class
    ];
}
