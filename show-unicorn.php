<?php

$id = $_GET['id'];

if ($id == "") {
    header("Location: index.php");
}

require("Classes/DetailedUnicorn.php");
require("Classes/Logger.php");
require("helpers/apiCall.php");

require("header.php");
require("unicorn-search.php");

use Unicorn\DetailedUnicorn;
use OwnLogger\OwnLogger;

$url = "http://unicorns.idioti.se/";
$url .= strval($id);

try {
    $data = apiCall($url);
} catch (Exception $e) {
    require("error.php");
    $logger = New OwnLogger($e);
    $logger->logError();
    exit();
}

$unicorn = New DetailedUnicorn($data);

$name = $unicorn->getName();
$desc = $unicorn->getDesc();
$reported_by = $unicorn->getReportedBy();
$spotted_when = $unicorn->getSpottedWhen();
$image = $unicorn->getImage();

$logger = New OwnLogger($name);
$logger->logVisit();

?>

<div class="row">
    <div class="col s6">
        <?php
            echo("<h4>$name</h4>");
            echo("<p>$spotted_when</p>");
            echo("<p>$desc</p>");
            echo("<p>Rapporterad av: $reported_by</p>");
        ?>
    </div>
    <div class="col s6">
        <?php
            echo("<img class=\"responsive-img\" src=\"$image\" alt=\"Enhörning\">");
        ?>
    </div>
</div>


<?php
require("footer.php");
?>