<?php
$s = addslashes($_GET['s']);
echo md5($s);