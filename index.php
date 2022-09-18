<?php
require_once 'config/init.php';

$template = new Template('templates/frontpage.php');
$template->title = 'Latest Jobs';

echo $template;