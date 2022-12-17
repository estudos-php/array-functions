<?php

namespace LaracraftTech;

use Illuminate\Support\Arr;

/**
 * Get a key-value pair from the array, and remove it.
 *
 * @param  array  $array
 * @param  string|int  $key
 * @param  mixed  $default
 * @return mixed
 */
function array_pull_with_Key(&$array, $key, $default = null)
{
    //as func_get_args() loses references, we can't pass
    //spreaded func_get_args() here...
    $value = Arr::pull($array, $key, $default);

    return [$key => $value];
}
