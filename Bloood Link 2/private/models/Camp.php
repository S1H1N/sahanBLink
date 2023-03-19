<?php

/**
 * camp model
 */

class Camp extends Model
{
    protected $table = "campaign";




    protected $allowedColumns = ['campID','cName', 'description', 'date', 'venue', 'bloodBank', 'email', 'phone','camp_img'];
    


    public function validate($DATA)
    {

        $this->errors = array();



        if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
            $this->errors[] = ("Valid email is required");
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }
}