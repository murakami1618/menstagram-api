<?php

//

Route::get('/notice/liked', function () {

  return [
    'id' => 1,
    'src_user' => [
      'user_id' => 'XXXX',
      'screen_name' => 'XXXX',
      'avater' => 'XXXX'
    ],
    'post'=>[
      'id' => 'XXXX',
      'image' => 'XXXX'
    ],
    'like'=>[
    'create_at' => 'XXXX'
    ]
  ];

});

Route::get('/notice/followed', function () {

  return [
    'id' => 1,
    'src_user' => [
      'user_id' => 'XXXX',
      'screen_name' => 'XXXX',
      'avater' => 'XXXX'
    ],
    'follow'=>[
      'is_followed'=>false,
      'created_at'=>'XXXX'
    ]
  ];
});

Route::get('/notice/system', function () {
  return[
    'id' =>1,
    'text' =>'XXXX',
    'created_at'=>'XXXX',
  ];
});