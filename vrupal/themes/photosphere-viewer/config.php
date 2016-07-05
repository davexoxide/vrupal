<?php

return [

  'title' => 'Web VR Photosphere Viewer',

  'description' => '360-degree photo sphere viewer with navigation menu.',

  'configuration' => [
    'panels' => [
      'my-panel-0' => [
        'label' => 'Your Images',
        'priority' => 5
      ],
    ],
    'controls' => [
      'images_upload' => [
        'type' => 'images',
        'required' => true,
        'label' => 'Upload Equirectangular Images',
        'description' => 'Images are automatically resized to the nearest power of two for width and height.',
        'panel' => 'my-panel-0'
      ],
    ],
  ],
 
];


