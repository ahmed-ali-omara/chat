`<?php
include("config.php");
$demo = mysqli_query($conn,"SELECT * FROM MOON");
while ($row =mysqli_fetch_array($demo)) {
?>
<div class="mass">
    <span id="mass"><?php
    echo $row ["Mass"];
    ?></span>
</div><br>
<?php
}?>` 