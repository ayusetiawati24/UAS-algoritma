<?php

$teks = " Hy @_putuayuu24";

function deteksiUsername($input)
{
    $regex = "/@([a-zA-Z0-9_]+)/";
    $timpa = "<a https://www.instagram.com/p/CHuvs1jBzHA/?utm_source=ig_web_copy_link>$0</a>";

    return preg_replace($regex, $timpa, $input);
}
    echo deteksiUsername($teks);

?>