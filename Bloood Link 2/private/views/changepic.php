<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/css/change_pic.css">
    <title>upload pic</title>
</head>

<body>
    <div class="change_pic">

        <p class="heading">Change profile pic</p>

        <div class="visible">
            <i class="fa-solid fa-circle-exclamation"></i>
            <small>error message</small>
        </div>

        <form method="post" enctype="multipart/form-data" class="file_form" >

            <label for="file" class="file_label" id="file_label">

                <div class="file_h">
                    <i class="fa-regular fa-image"></i>
                    <p id="file_name" class="file_name">Select Image</p>
                </div>
                <input type="file" name="file" id="file" class="file">
            </label>
            <br>

            <button type="submit" class="save" name=submit >Submit</button>

        </form>

    </div>

    <script src="http://localhost:8888/Bloood%20Link%202/public/js/change_pic.js"></script>
</body>





</body>

</html>