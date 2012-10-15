<?php
function password_needs_rehash($hash, $algo, array $options = array()) {
    $info = password_get_info($hash);
    $return = $algo != $info['algo'];
    // Skip salt parameter if supplied to options
    $return |= array() != array_diff_assoc($info['options'], $options);
    return $return;
}

