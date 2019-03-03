<?php

/**
 * gravatar
 *
 * @param  string $email
 * @param  int $size
 * @param  string $rating
 *
 * @return string url
 */
function gravatar($email = '', int $size = 60, string $rating = 'pg' ) {
    $email = md5(strtolower(trim($email)));
    $gravurl = "https://www.gravatar.com/avatar/$email?s=$size&r=$rating";
    return $gravurl;
}