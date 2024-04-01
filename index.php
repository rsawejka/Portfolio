<?php
$pageTitle = "RSawejka - Home";
include 'includes/header.php';
?>
<div class="scroll-snap-type-container">
    <section id="introPannel">
        <?php
        include 'includes/home.php';
        ?>
        <!--<div>
                <h1 id="welcome">Ryan Sawejka -- Portfolio</h1>
                <h3>My Qualifications</h3>
                <div>
                    <div>
                        <ul>
                            <li>Web Developer student offering abilities in multiple code languages with over 5 years work experience.</li>
                            <li>Capable of learning new things.</li>
                            <li>Characterized as focused, and motivated.</li>
                            <li>Track record of meeting deadlines.</li>
                            <li>Proficient in PHP, WordPress, CSS, HTML, JavaScript.</li>
                            <li>Excel in problem solving.</li>
                        </ul>
                    </div>
                    <div id="skills">
                        <h3>Acquired Skills</h3>
                        <ul>
                            <li>Able to design and develop database-driven web pages using PHP.</li>
                            <li>Learned object-oriented PHP techniques to customize WordPress and develop custom plugins.</li>
                            <li>Capable of creating dynamic we applications using JavaScript frameworks.</li>
                            <li>Understanding of anticipating what users might need to do and ensuring the interface provides elements to facilitate those actions.  </li>
                        </ul>
                    </div>
                </div>-->
    </section>
</div>
<section id="aboutMe" class="pb-4  position-relative" >
<div class="p-5">
        <h2 class="pt-5 pb-3 text-FFFAFF">About Me</h2>
    </div>
    <?php
    include 'includes/aboutMe.php';
    ?>
</section>
</div>
<section id="myProjects" class=" projectsDiv position-relative">
<div class="p-5">

<h2 class="pt-5  text-FC5130 ">My Projects</h2>
</div>
<?php
include "includes/projectCardColumns.php";
?>
</section>
<!-- <section id="sectionThree" class="position-relative pt-5">
    <h2 class="text-FFFAFF mx-5 mb-2 pt-5" id="thingsILike">Things I like</h2>
    <?php
   // include "includes/tiles.php";
    ?> 
</section> -->
<div class="bg-FC5130 text-FFFAFF p-4 text-center">
    <a href="index.php" class="text-FFFAFF backToTop w-25">
         <div class="pb-3"><i class="fa-solid fa-circle-arrow-up fa-5x"></i></div>
    <div>Back to top</div>
    </a>
</div>
<?php
include 'includes/footer.php';
?>