<?php

echo "Hello World";
function shouldShowSubmissionData()
{
    return count($_POST) > 0;
}
function getPostData($key) {
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }
    return "";
}
