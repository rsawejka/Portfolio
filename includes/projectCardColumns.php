<?php
include "cardsTable.php";
echo "<div class='container'><div class='row '>";
foreach ($projects as $project){
    echo "
  <div class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4'>
     <div class='card card-width mb-5'>
       

        <div class='card-body'>
            <h3 class='card-title'>$project[1]</h3>
            <p class='card-text'>
            $project[2]
            </p>
            <div class='buttonGitFlex'>";

            if ($project[5] != "") {
            echo "<a href='$project[5]' target='_blank'><button type='button' id='contactMe' class='mt-3 btn btn-outline-secondary'>View Site</button></a>";
            }else{
                echo "";
            }
            if($project[7] != ""){

           
            echo "<a href='$project[7]' ><div><button type='button' id='githubButton' class='mt-3 ms-1 btn btn-outline-secondary'><i class=' fa-brands fa-square-github fa-2xl gitIcon'></i></button></div></a>
                </div>";
            
            }else{
                echo "</div>";
            }
        

      echo " </div>
        <div class='card-footer'>
            <div class='codeIcon'>
                $project[3]

            </div>
        </div>
    </div>
    </div>
    ";
}
?>
  </div>
</div>
<?php
