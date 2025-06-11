<?php
function firebase($path = '') {
    $url = "https://YOUR_PROJECT_ID.firebaseio.com/$path.json";
    return $url;
}
