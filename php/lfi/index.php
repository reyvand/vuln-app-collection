<?php

error_reporting(0);

echo (isset($_GET['filename'])) ? file_get_contents($_GET['filename']) : "missing filename parameter on URL (ex: /?filename=home)";
