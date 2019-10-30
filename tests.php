<?php
require 'Paginasi.php';

use KopetPaginasi\Paginasi;


$s1 = new Paginasi(1278, 10, ((isset($_GET['p'])) ? $_GET['p'] : 2), '/');
echo 'CP: ' . ((isset($_GET['p'])) ? $_GET['p'] : 2) . '<br/>';
foreach ($s1->view() as $d) {
    echo '<a href="tests.php?p=' . $d['p'] . '" style="border:solid 1px #666;padding:1px 5px;margin:0 5px 5px 0;">' . $d['p'] . '</a> ';;
}
echo "<br/><br/>";



$s1 = new Paginasi(12, 10, ((isset($_GET['p'])) ? $_GET['p'] : 2), '/');
echo 'CP: ' . ((isset($_GET['p'])) ? $_GET['p'] : 2) . '<br/>';
foreach ($s1->view() as $d) {
    echo '<a href="tests.php?p=' . $d['p'] . '" style="border:solid 1px #666;padding:1px 5px;margin:0 5px 5px 0;">' . $d['p'] . '</a> ';;
}
echo "<br/><br/>";


$s1 = new Paginasi(22, 10, ((isset($_GET['p'])) ? $_GET['p'] : 2), '/');
echo 'CP: ' . ((isset($_GET['p'])) ? $_GET['p'] : 2) . '<br/>';
foreach ($s1->view() as $d) {
    echo '<a href="tests.php?p=' . $d['p'] . '" style="border:solid 1px #666;padding:1px 5px;margin:0 5px 5px 0;">' . $d['p'] . '</a> ';;
}
echo "<br/><br/>";



$s1 = new Paginasi(108, 10, ((isset($_GET['p'])) ? $_GET['p'] : 2), '/');
echo 'CP: ' . ((isset($_GET['p'])) ? $_GET['p'] : 2) . '<br/>';
foreach ($s1->view() as $d) {
    echo '<a href="tests.php?p=' . $d['p'] . '" style="border:solid 1px #666;padding:1px 5px;margin:0 5px 5px 0;">' . $d['p'] . '</a> ';;
}
echo "<br/><br/>";



$s1 = new Paginasi(128, 10, ((isset($_GET['p'])) ? $_GET['p'] : 2), '/');
echo 'CP: ' . ((isset($_GET['p'])) ? $_GET['p'] : 2) . '<br/>';
foreach ($s1->view() as $d) {
    echo '<a href="tests.php?p=' . $d['p'] . '" style="border:solid 1px #666;padding:1px 5px;margin:0 5px 5px 0;">' . $d['p'] . '</a> ';;
}
echo "<br/><br/>";
