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