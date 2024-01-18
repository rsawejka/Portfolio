<?php
include 'includes/cardsTable.php';
$projectId = $_GET['id'];
$description = "";
$icons = "";
$imageLink = "";
$linkToSite = "";
$linkToGIt = "";
foreach ($projects as $project) {
    if ($project[0] == $projectId) {
        $pageTitle = $project[1];
        $description = $project[6];
        $icons = $project[3];
        $imageLink = $project[4];
        $linkToSite = $project[5];
        $linkToGIt = $project[7] ?? "";
    }
}
include "includes/header.php";

?>
    <div class='pt-5 mt-5 '>
        <h3 class="px-5"><?= $pageTitle ?></h3>
        <div class="row p-5">
            <div class="col-12 col-md-6">
                <img class='img-thumbnail' src='<?= $imageLink ?>' class='card-img-top'
                     alt='...'>

            </div>
            <div class="col-12 col-md-6">
                <div class="mt-3"><?= $description ?></div>

            </div>
        </div>
        <div class="row px-5">
            <div class="col-12 col-md-6"><a href="<?= $linkToSite ?>" target="_blank">
                    <button type="button" id="contactMe" class="mt-3 btn btn-outline-secondary col-12 mb-3">View Project
                    </button>
                </a></div>

            <?php if ($linkToGIt == ""){
                echo " ";
            }else{
                echo "<div class='col-12 col-md-6'>
                      <a href='$linkToGIt' target='_blank'>
                      <button type='button' id='contactMe' class='mt-3 btn btn-outline-secondary col-12 mb-3'>
                      <i class='icon-text-color fa-brands fa-github'></i>
                      </button>
                      </a>
                      </div>";
            }?>



        </div>

        <div class="bg-5B7792 mt-5">
            <div class="p-5">
                <h2 class="text-white">Tools used for this project</h2>

                <div class="row justify-content-center" id="iconRow">
                    <?php
                    $icon = explode("</i>", $icons);
                    foreach ($icon as $singleIcon) {
                        $displayIcon = $singleIcon . "</i>";

                        if ($displayIcon === "</i>") {
                            echo "";
                        } else {
                            echo "<div class='text-center text-white mt-3 col-6 col-sm-4 col-md-3 col-lg-2'>";
                            $correctSizeIcon = str_replace("logoSize", "fa-7x", $displayIcon);
                            echo $correctSizeIcon;
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
include "includes/footer.php";
?>