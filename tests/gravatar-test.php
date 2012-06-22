<?php
$gravatar_hash =  md5(strtolower(trim($email)));
$gravatar_prof_data = file_get_contents('http://www.gravatar.com/'.$gravatar_hash.'.php');
$profile = unserialize($gravatar_prof_data);
echo '<pre>';
print_r($profile['entry'][0]);
echo '</pre>';
?>