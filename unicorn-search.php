<form class="col s12" action="/show-unicorn.php" method="get">
    <?php
        if (isset($id)) {
            echo("<input type=\"number\" placeholder=\"Id på Enhörning\" name=\"id\" value=\"$id\">");
        }
        else {
            echo("<input type=\"number\" placeholder=\"Id på Enhörning\" name=\"id\">");
        }
    ?>
    <button class="btn waves-effect waves-light" type="submit">Visa enhörning</button>
    <a href="index.php" class="waves-effect waves-light btn">Visa alla enhörningar</a>
</form>