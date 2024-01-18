<?php
$firstName = $_POST['firstName'] ?? "";
$lastName = $_POST['lastName'] ?? "";
$email = $_POST['email'] ?? "";
$phoneNumber = $_POST['phoneNumber'] ?? "";
$message = $_POST['message'] ?? "";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From portfolio site: <' . $encodedEmail . '>' . "\r\n";

?>
</main>
</main>
</div>
<section class="sectionFive" id="sectionFive">
    <!--SORT THROUGH WHAT IS NEEDED OR FIND NEW ONE-->
    <section class="p-5">

        <!--Section heading-->
        <h2 class="pb-3 mt-3 text-FFFAFF" id="contact">Contact me!</h2>
        <!--Section description-->

        <div class="row justify-content-center">

            <div class="col-12 col-md-5 col-lg-3 text-center text-FFFAFF">
                <a target="_blank" class="text-decoration-none text-FFFAFF"
                   href="https://www.linkedin.com/in/ryansawejka/">
                    <i class="fa-brands fa-linkedin-in fa-2x"></i>
                    <p>linkedin.com/in/ryansawejka/</p>
                </a>
            </div>

            <div class="col-12 col-md-5 col-lg-3 text-center text-FFFAFF">
                <i class="fas fa-phone  fa-2x"></i>
                <p>(262) 719-9472</p>
            </div>
            <div class="col-12 col-md-5 col-lg-3 text-center text-FFFAFF">
                <a target="_blank" class="text-decoration-none text-FFFAFF"
                   href="mailto: <?= $encodedEmail ?>">
                    <i class="fas fa-envelope  fa-2x"></i>
                    <p><?= $encodedEmail ?></p></a>
            </div>
            <div class="col-12 col-md-5 col-lg-3 text-center text-FFFAFF">
                <a target="_blank" class="text-decoration-none text-FFFAFF" href="https://github.com/rsawejka">
                    <i class="fa-brands fa-github fa-2x"></i>
                    <p>github.com/rsawejka
                    </p>
                </a>
            </div>
        </div>

        <div class="container">
        <form method="post">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="firstName" placeholder="First Name" class="form-control"
                                   id="floatingInput">
                            <label for="firstName">First Name:</label>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="lastName" placeholder="Last Name" class="form-control"
                                   id="floatingInput">
                            <label for="lastName">Last Name:</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="email" placeholder="Email" class="form-control"
                                   id="floatingInput">
                            <label for="email">Email:</label>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" name="phoneNumber" placeholder="Phone Number" class="form-control"
                                   id="floatingInput">
                            <label for="phoneNumber">Phone Number:</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class='form-floating mb-3 '>
                            <textarea style="height: 100px;" name='message' class='form-control' id='floatingInput'
                                      placeholder='message'></textarea>
                            <label for='message'>Your Message</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class='form-floating mb-3 '>
                            <input type='submit' name='sendMessage' id='sendMessage' value='Send Message'
                                   class='btn btn-outline-secondary col-12 mb-2 contactFormButton'>
                        </div>
                    </div>
                </div>

        </form>
            <button class='btn btn-outline-secondary col-12 mb-2 contactFormButton'>Download My Resume</button>
        </div>
        <?php
        $emailMessage = "
        <html>
<head>
<title>From Portfolio Site</title>
</head>
<body>
<div>Senders First Name: $firstName</div>
<div>Senders Last Name: $lastName</div>
<div>Senders email: $email</div>
<div>Senders phone number: $phoneNumber</div>
<div>Senders message: $message</div>
</body>
</html>
        ";

        if (isset($_POST['sendMessage'])){
            mail($encodedEmail,"From Portfolio Site",$emailMessage,$headers);
        }
        ?>

    </section>
    <!--Section: Contact v.2-->

    <footer class="px-5">
        <div class="row pb-5">


        <div class="col-12 col-sm-6"><img src="img/unnamed.png"></div>
        <div class="col-12 col-sm-6 text-end text-FFFAFF">&copy; Ryan Sawejka</div>
        </div>
       </footer>
</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="java.js"></script>
<script src="https://kit.fontawesome.com/ff20b154db.js" crossorigin="anonymous"></script>
<script src="page-progress.min.js"></script>
<script type="text/javascript" src="dist/js/demo.js"></script>
</div>
</body>
</html>