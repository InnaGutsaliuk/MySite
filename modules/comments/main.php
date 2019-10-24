<?php
$res = q("
    SELECT *
    FROM `comments`
    ORDER BY `date` DESC
    LIMIT 10
");

