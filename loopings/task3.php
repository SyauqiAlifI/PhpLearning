<?php
for ($i = 0; $i <= 100; $i += 2) {
    echo $i, '<br/>';
}
echo '<hr/>';
for ($i_b = 100; $i_b >= 0; $i_b -= 2) {
    echo $i_b, '<br/>';
}
echo '<hr/>';
?>
<!-- Using While -->
<?php
$i_c = 0;
while ($i_c <= 100) {
    echo $i_c, '<br/>';
    $i_c += 2;
}
?>