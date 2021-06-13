<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | MOMENTIO</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style-contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet'>
    <link rel="icon" href="images/logo.png">
    <!-- <script src="js/javaScript.js"></script> -->
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Contact Form</h2>
        </div>
        <form id="form" class="form" method="post" action="include/contact_post.php">
                <div class="form-control">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Write your name..." id="fullname"  />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" placeholder="Write your lastname..." id="lastname"  />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Write your email..." id="email"  />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="subject">Subject</label>
                    <input type="text"  name="subject" placeholder="Write subject..." id="subject"  />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="message">Message</label>
                    <textarea name="message" placeholder="Write message..." id="message" rows="5" col="43" ></textarea>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>

            <button type="submit" value="Send" name="submit">Send</button>
            

            <script src="js/js_contact.js"></script>
        </form>
    </div>
    <?php include "include/footer_form.php";?>
</body>
</html>