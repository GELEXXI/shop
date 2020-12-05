<?php
$dat = mktime(12, 43, 59, 1, 31, 2020);
echo $dat;
echo '<br>'.time();
echo '<br>'.date('Y');
echo '<br>'.date('y');
echo '<br>'.date('m');
echo '<br>'.strtotime('now');
echo '<br>'.date('d.m.Y H:i:s   w',strtotime('+1 day') );
$date = date_create('2026-12-31');
date_modify($date,'1 day');
echo '<br>';
echo date_format($date,'d.m.Y');

echo '<h3>Задача 3</h3>';

echo date('d.m.Y H:i:s',strtotime('2031-09-23 12:58:59'));
