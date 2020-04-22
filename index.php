<?php
/**
 * Created by IntelliJ IDEA.
 * User: johnbinzak
 * Date: 2020-04-22
 * Time: 07:28
 */

/**
 * @param $image_url
 * @param int $max_dimension
 * @return bool|resource
 */
function createResizedImage($image_url, $max_dimension = 200) {

    // [SNIPPET]
    // get the dimensions
    list($width, $height) = getimagesize($image_url);

    // if no dimension, exit
    if(empty($width) || empty($height)){
        return false;
    }

    // rescale dimensions
    if ($width > $height) {
        $new_width = $max_dimension;
        $new_height = $max_dimension * ($height/$width);
    } else {
        $new_height = $max_dimension;
        $new_width = $max_dimension * ($width/$height);
    }

    // [/SNIPPET]

}
