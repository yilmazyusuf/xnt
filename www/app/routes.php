<?php

return [
    '/' => [\App\Actions\IndexAction::class,'index'],
    '/*' => \App\Actions\PostAction::class
];