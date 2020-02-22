<?php 
class Cms5e51655dbf6e7409877992_7906e00dfe58dfeccfc4ff0542bca0e1Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $this['vuetober'] = [
        'env' => app()->env,
        'token' => Session::token(),
    ];
}
}
