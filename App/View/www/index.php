<?php
echo '<ul>';
foreach ($this->view->section as $sec){
    echo "<li>$sec</li>";
}
echo '</ul>';