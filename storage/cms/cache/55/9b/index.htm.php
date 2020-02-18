<?php 
class Cms5e4c5272ae4dd663687104_b3eb0315c097306106ca0a16e304dad6Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['vuetober'] = [
        'env' => app()->env,
        'token' => Session::token(),
    ];
}
}
