<?php
class ViewCategory {

    public static function CategoryByID($arr)
    {
        echo '<div class="container">';
        echo '<div class="row">';

        foreach ($arr as $value) {
            echo '<div class="col">';
            echo "<h3>" . $value['title'] . "</h3>";
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
}
