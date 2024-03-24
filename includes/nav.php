
<header>
    <div class="scroll-progress position-fixed" id="scroll-progress">
    </div>


<!--have no background color each section will change the header background color-->
    <nav class="nav p-3 position-fixed w-100 d-flex flex-row " id="navbar">
     <!--  <li> <div id="sideBarButton">
            <span  class="icon"></span>
            <span class="icon"></span>
            <span class="icon"></span>
        </div>
       </li>-->
<div class="d-flex flex-row pt-2 navSectionOne">


           <li class=""><a href="index.php">Home</a></li>
           <li class=""><a class="" href="index.php#myProjects">Projects</a></li>
            <li class=""><a href="index.php#aboutMe">About Me</a></li>
            <li class=""><a class="" href="index.php#contact">Contact</a></li>

</div>
        <div class="navSectionTwo">
            <a href="/"><img src="img/unnamed.png"></a>
        </div>
        <div class="nav-width d-flex flex-row justify-content-end icon-text-color nav-icons pt-2 navSectionThree">
            <div class="ps-2">
                <a data-toggle='tooltip' data-placement='bottom' title='Linkedin' href="https://www.linkedin.com/in/ryansawejka/" target='_blank'>   <i class="icon-text-color fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="ps-2">
              <a data-toggle='tooltip' data-placement='bottom' title='Send me an email!' href="mailto: <?= $encodedEmail ?>" target='_blank'>  <i class="icon-text-color fa-regular fa-paper-plane"></i></a>
            </div>
            <div class="ps-2">
                <a data-toggle='tooltip' data-placement='bottom' title='GitHub' href="https://github.com/rsawejka" target='_blank'>   <i class="icon-text-color fa-brands fa-github"></i></a>

            </div>
            <div class="ps-2">
                <a data-toggle='tooltip' data-placement='bottom' title='My Resume' href="https://docs.google.com/document/d/1nmKhqnXoyaD-mgMuUwwoGIkkLVSQkRAR/edit?usp=sharing&ouid=114616965554620945468&rtpof=true&sd=true" target='_blank'>   <i class="icon-text-color fa-regular fa-file"></i></a>

            </div>


        </div>
    </nav>



</header>
