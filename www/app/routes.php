<?php

return [
    '/' => [\App\Actions\IndexAction::class,'index'],
    'post/*' => \App\Actions\PostAction::class
];