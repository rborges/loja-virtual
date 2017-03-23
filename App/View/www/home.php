<?php

echo '<ul>';
foreach ($this->view->people as $person){
    echo "<li>$person</li>";
}
echo '</ul>';
