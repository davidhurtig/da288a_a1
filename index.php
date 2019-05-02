<?php

require_once "vendor/autoload.php";

require("Classes/Logger.php");
require("Classes/Unicorns.php");
require("helpers/apiCall.php");

require("header.php");
require("unicorn-search.php");

$url = "http://unicorns.idioti.se/";
try {
    $data = apiCall($url);
} catch (Exception $e) {
    require("error.php");
    exit();
}

use Unicorn\Unicorns;
use OwnLogger\OwnLogger;

$unicorns = New Unicorns($data);
$logger = New OwnLogger("All unicorns");
$logger->logVisit();
?>

<h3>Alla enhörningar</h3>
<div class="collection">
    <?php
        foreach ($unicorns->getUnicorns() as $unicorn) {
            #echo(print_r($value));
            $id = $unicorn->getId();
            $name = $unicorn->getName();
            #$details = $unicorn->getDetails();
            echo("<a href=\"show-unicorn.php?id=$id\" class=\"collection-item\">$id : $name </a>");
        }
    ?>
</div>

<?php
require("footer.php");
?>
