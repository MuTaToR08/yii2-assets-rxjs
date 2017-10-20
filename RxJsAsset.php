<?php
namespace mutator08\assets;

class RxJsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/rxjs/dist';
    public $js = ['rx.all.js'];
}