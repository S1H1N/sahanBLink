<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/css/manage.css">
    <title>Manage</title>
</head>

<body>
    <div>
        <h1>Manage</h1>
    </div>
   

    <div>
        <form class="form">

                <!-- Blood Bank Name, Blood Bank ID, Blood Bank Location -->

            <div class="two_col">
                <div class="form_div">
                    <label for="Blood_Bank_Name" class="label">Email :</label>
                    <input type="text" name="Blood_Bank_Name" id="Blood_Bank_Name" class="input">
                </div>
                <div class="form_div">
                    <button class="button">Generate AC</button>
                </div>
            </div>


            <div class="two_col1">
                <div class="form_div">
                    <label for="Blood_Bank_ID" class="label">Location :</label>
                    <input type="text" name="Blood_Bank_ID" id="Blood_Bank_ID" class="input1">
                </div>
                <div class="form_div">
                    <label for="Blood_Bank_Location" class="label">Gen Code :</label>
                    <input type="text" name="Blood_Bank_Location" id="Blood_Bank_Location" class="input2">
                </div>
            </div>

            <div class="two_col1">
                <div class="form_div">
                    <label for="Blood_Bank_ID" class="label">Assigned Doctor :</label>
                    <input type="text" name="Blood_Bank_ID" id="Blood_Bank_ID" class="input3">
                </div>
                <div class="form_div">
                    <label for="Blood_Bank_Location" class="label">Doctor ID :</label>
                    <input type="text" name="Blood_Bank_Location" id="Blood_Bank_Location" class="input4">
                </div>
            </div>

        </form>
    </div>

</body>

</html>