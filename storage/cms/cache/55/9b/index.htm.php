<?php 
class Cms5e4bfb2af3c58087762554_85384a23dd64d16589da2d76b0cbb7c8Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['vuetober'] = [
        'env' => app()->env,
        'token' => Session::token(),
    ];
}
}
