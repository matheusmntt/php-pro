<?php

namespace app\router;

class Routes
{
  public static function get()
  {
    return [
      'get' => [
        '/' => 'HomeController@index',
        '/user/[0-9]+' => 'UserController@edit',
        '/product/[a-z]+/category/[a-z]+' => 'ProductController@show',
        '/register' => 'RegisterController@index',
      ],
      'post' => [
        '/user/update/[0-9]+' => 'UserController@update'
      ]
    ];
  }
}