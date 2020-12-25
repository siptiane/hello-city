<?php

    if(! function_exists('base_title')){

        function base_title(?string $title = null): string {

            return $title ? $title . ' | ' . config('app.name') : config('app.name');
        }
    }