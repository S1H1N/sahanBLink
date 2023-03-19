<?php
class OnetimeUI extends Controller
{
    function index($id = '')
    {   
        $id=$_GET['id'];


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bd=new Rawblood();
        $query1="SELECT donor.* FROM donor INNER JOIN raw_blood_packet ON donor.id=raw_blood_packet.donor_id WHERE raw_blood_packet.blood_donation_camp_id=$id";
        $data=$bd->query($query1);


        $this->view('staff/onetimeui',['rows'=>$data]);
       
    }
}