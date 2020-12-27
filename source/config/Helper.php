<?php

function url($url = null): string
{
    return ($url) ? BASE_URL . "/{$url}" : BASE_URL;
}
