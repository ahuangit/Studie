<?php

$txt = file_get_contents('email.txt');

$emails = explode("\n",$txt);

sort ($emails);