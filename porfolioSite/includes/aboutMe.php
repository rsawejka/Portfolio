<?php
include "aboutMeTable.php";
//see notebook
echo '<div class="container ">';
echo ' <div class="row mb-5">';
foreach ($information as $info){
echo '<div class="' . $info[3] . " " . ' aboutMeBox">
            <h2 class="m-4 text-FC5130">' . $info[0] . '</h2>
            <div class="text-center mb-4 text-FC5130">' . $info[1] . '</div>
            <div class="m-4 text-5B7792">' . $info[2] . '</div>
      </div>';
}
?>
</div>
</div>
