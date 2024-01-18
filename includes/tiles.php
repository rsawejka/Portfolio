    <div class='row mt-5'>
<?php
//each array is a card and all of its info
$tiles = array(
    array("<i class='fa-brands fa-vuejs fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-brands fa-vuejs'></i><span class='px-2'>Vue JS</span></h4>
                                                                 <div class='text-left text-black'>I like Vue JS because it allows the developer to develop a one-page app, using components very easily
                                                                 <div class='text-center'>
                                                                 <a target='_blank' href='https://rsawejka.bitlampsites.com/portfolio/dist/' type='button'  class='tileButton mt-3 btn btn-outline-secondary'>View Project</a>
                                                                 </div>
                                                                 </div>
                                                                 </div>", "Vue JS"),
    array("<i class='fa-brands fa-js fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-brands fa-js'></i><span class='px-2'>JavaScript</span></h4>
                                                                 <div class='text-left text-black'>I like to code with JavaScript because, it allows the developer to virtually do anything they need to do. Once you know the basics you can manipulate the language however needed to.
                                                                 <div class='text-center'>
                                                                 <a target='_blank' type='button' href='https://rsawejka.bitlampsites.com/cms/ridethebus/'  class='tileButton mt-3 btn btn-outline-secondary'>Java Script Game</a>
                                                                 </div>
                                                                 </div>
                                                                 </div>", "JavaScript"),
    array("<i class='fa-brands fa-html5 fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-brands fa-html5'></i><span class='px-2'>HTML</span></h4>
                                                                 <div class='text-left text-black'>HTMl is the first coding language I ever learned. Although it is a very simple language, when it is combined with CSS a developer can do some cool things!
                                                                 </div>
                                                                 </div>", "HTML"),
    array("<i class='fa-brands fa-css3-alt fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-brands fa-css3-alt'></i><span class='px-2'>CSS</span></h4>
                                                                 <div class='text-left text-black'>CSS is the most important part of a website for an average consumer. I like CSS because it is fairly easy to learn, but it can become very complex coding language. These siding tiles are made with CSS only.
                                                                 </div>
                                                                 </div>", "CSS"),
    array("<i class='fa-solid fa-database fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h3 class='mb-2 icon-text-color'><i class='fa-solid fa-database'></i><span class='px-2'>Databases</span></h3>
                                                                 <div class='text-left text-black'>I love using a database when creating a website, it allows me to not repeat code, and allows me to create dynamic websites.
                                                                 </div>
                                                                 </div>", "Databases"),
    array("<i class='fa-brands fa-php fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class=' icon-text-color'><i class='fa-brands fa-php'></i><span class='px-2'>PHP</span></h4>
                                                                 <div class='text-left text-black'>PHP is the language I am the most experienced in. I like using PHP because I know it the best out of any other coding language just because I can always manipulate it to my advantage. Below is a link to my best website made in PHP.  
                                                                 <div class='text-center'>
                                                                 <a target='_blank' type='button' href='https://rsawejka.bitlampsites.com/portfolio/Final/homePage.php'  class='mt-3 tileButton btn btn-outline-secondary'>View Project</a>
                                                                 </div>
                                                                 </div>
                                                                 </div>", "PHP"),
    array("<i class='fa-brands fa-wordpress-simple fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class=' icon-text-color'><i class='fa-brands fa-wordpress-simple'></i><span class='px-2'>WordPress</span></h4>
                                                                 <div class='text-left text-black'>WordPress is great because sometimes it is the best and easiest solution. WordPress is fun because it feels like there is a huge community behind it, where everyone just wants to help others. Below is a link to my best WordPress project.
                                                                 <div class='text-center'>
                                                                 <a target='_blank' type='button' href='https://lirwc.bitlampsites.com/'  class='tileButton mt-3 btn btn-outline-secondary'>View Project</a>
                                                                 </div>
                                                                 </div>
                                                                 </div>", "WordPress"),
    array("<i class='fa-brands fa-react fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-brands fa-react'></i></i><span class='px-2'>React JS</span></h4>
                                                                 <div class='text-left text-black'>React is something that I would love to learn more, just because I haven't done too much with it. But from what I have done with React it has always been very intriguing to learn more. 
                                                                 <div class='text-center'>
                                                                 <a type='button' href='https://final-taupe.vercel.app/' target='_blank' class='tileButton mt-3 btn btn-outline-secondary'>View Project</a>
                                                                 </div>
                                                                 </div>
                                                                 </div>", "React JS"),
    array("<i class='fa-brands fa-bootstrap fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-brands fa-bootstrap'></i><span class='px-2'>Bootstrap</span></h4>
                                                                 <div class='text-left text-black'>Bootstrap is awesome because it allows a developer to use pre-made CSS classes with modern components that are easy to customize anyway needed. On top of all of that it is free to use! In fact this entire site is made with bootstrap.
                                                                 </div>
                                                                 </div>", "Bootstrap"),
    array("<i class='fa-solid fa-paw fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-solid fa-paw'></i><span class='px-2'>Animals</span></h4>
                                                                 <div class='text-left text-black'>Currently I work at an animal shelter, and I love to spend my free time trying to allow them to have the best experience possible while they are at the shelter.  
                                                                 <div class='text-center'>
                                                                 <a target='_blank' href='imageGallary.php' type='button'  class='tileButton mt-3 btn btn-outline-secondary'>Image Gallery</a>
                                                                 </div>
                                                                 </div>
                                                                 </div>", "Animals"),
    array("<i class='fa-solid fa-gamepad fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-solid fa-gamepad'></i><span class='px-2'>Video Games</span></h4>
                                                                 <div class='text-left text-black'>In my free time I love to play video games, some of my all-time favorite games are Skyrim, Kerbal Space Program, CSGO, and They Are Billions.
                                                                 </div>
                                                                 </div>", "Video Games"),
    array("<i class='fa-solid fa-person-chalkboard fa-10x'></i>", "col-4", "<div class='p-3 text-left'><h4 class='mb-2 icon-text-color'><i class='fa-solid fa-person-chalkboard'></i><span class='px-2'>Tutoring</span></h4>
                                                                 <div class='text-left text-black'>In the past at WCTC I tutored for the PHP 1 class. I love to teach people, it was also a good way for me to brush up on my PHP skills.
                                                                 </div>
                                                                 </div>", "Tutoring")
);
//echo "<div class='d-flex flex-row flex-wrap tileContainer'>";
echo "";
$min = 0;
$max = 3;

shuffle($tiles);
foreach ($tiles as $tile){

    $randNum = rand($min,$max);
    if ($randNum === 0){
        echo "<div class='tileboxBottom $tile[1] d-xl-block d-none'>


    <div class='outer'>
  
        <div class='top'>
            <p  class='text-center'>$tile[0]</p>
              <div></div>
        </div>
        <div class='bottom '>
           $tile[2]
    </div>
    </div>

</div>";
    }
    if ($randNum === 1){
        echo "<div class='titleboxTop $tile[1] d-xl-block d-none'>


    <div class='outer'>
  
        <div class='top'>
            <p  class='text-center'>$tile[0]</p>
              <div></div>
        </div>
        <div class='bottom'>
           $tile[2]
    </div>
    </div>

</div>";
    }
    if ($randNum === 2){
        echo "<div class='tileboxLeft $tile[1] d-xl-block d-none'>


    <div class='outer'>
  
        <div class='top'>
            <p  class='text-center'>$tile[0]</p>
              <div></div>
        </div>
        <div class='bottom '>
           $tile[2]
    </div>
    </div>

</div>";
    }
    if ($randNum === 3){
        echo "<div class='tileboxRight $tile[1] d-xl-block d-none'>


    <div class='outer'>
  
        <div class='top'>
            <p class='text-center'>$tile[0]</p>
              <div></div>
        </div>
        <div class='bottom '>
          $tile[2]
    </div>
    </div>

</div>";
    }


}
echo "<div class='row px-5'>";
foreach ($tiles as $tile){
    echo "
      <div class='col-12 col-sm-12 col-md-6 col-lg-4 d-xl-none'>
     <div class='card card-width mb-5 card-min-height'>
         <div class='pt-5 text-center'>$tile[0]</div>
          <!--</button>-->

        <div class='card-body'>
            <p class='card-text'>
            $tile[2]

            </p>
            
        

        </div>
    </div>
    </div>
    ";
}


?>
</div>
</div>


