<?php 
class Cms5e4a6da4af3ea538353736_e05f704cd4810e915433f00d9bb743c9Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['vuetober'] = [
        'env' => app()->env,
        'token' => Session::token(),
    ];
}
}
