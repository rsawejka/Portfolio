<?php
include "cardsTable.php";
echo "<div class='container'><div class='row '>";
foreach ($projects as $project){
    echo "
  <div class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4'>
     <div class='card card-width mb-5'>
        <img class='card-img' src='$project[4]' class='card-img-top' alt='...'>
          <!--</button>-->

        <div class='card-body'>
            <h5 class='card-title'>$project[1]</h5>
            <p class='card-text'>
            $project[2]

            </p>
            <a href='$project[5]' target='_blank'><button type='button' id='contactMe' class='mt-3 btn btn-outline-secondary'>View Site</button></a>
            <a href='/indevidualProject.php?id=$project[0]' ><button type='button' id='contactMe' class='mt-3 btn btn-outline-secondary'>More Details</button></a>
        

        </div>
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
