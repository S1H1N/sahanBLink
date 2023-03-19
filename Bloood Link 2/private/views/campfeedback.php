<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?= ROOT ?>/css/campfeedback.css">
    <title>camp feedback</title>

</head>

<body>

    <div class="main">
        <div class="card"> 
            <form method="post" class="form">
            <div class="card-h"><h1>Give your feedback</h1></div>
            <div class="stars">
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
            </div>
            <div class="rateus"><p>Rate Us Now</p></div>
           
            <div class="email">
                <label for="name">Name</label><br>
                <input value="<?= (!Auth::logged_in())?'': AUTH::getfullname()?>" type="text" name="name"class="emailclass" id=""><br>
            </div>
            <div class="feedbacksec">
                <label for="feedback">Feedback</label><br>
                <textarea name="feedback" class="feedback"id="" cols="30" rows="10"></textarea>
            </div>
            <button class="btn">Submit</button>
            </form>
        </div>
    </div>





</body>