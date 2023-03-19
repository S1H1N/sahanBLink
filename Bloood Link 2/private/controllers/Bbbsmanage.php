<?php
class Bbbsmanage extends Controller
{
    function index($id = '')
    {
        $counts=array();

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bbid=$_SESSION['USER']->blood_bank_id;


        // $bdc = $this->load_model('Bdcreq');

            // $arr['fullname'] = "harini silva";
            // $arr['email'] = "hello@gmail.com";
            // $arr['nic'] = "200016206040";
            // $arr['mobile'] = "0703802708";
            // $arr['city'] = "auckland";
            // $arr['address'] = "1/90 mahiyangana road badulla";
            // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
            // $arr['profile_img'] = "";
           $rbc=new Rbc();
           $wbc=new Wbc();
           $plt=new Platelettes();
           $plsm=new Plasma();

           $data1=$rbc->getbscount("blood_bank_id",$bbid);
           $data2=$wbc->getbscount("blood_bank_id",$bbid);
           $data3=$plt->getbscount("blood_bank_id",$bbid);
           $data4=$plsm->getbscount("blood_bank_id",$bbid);

           if($data1){
            $counts['rbc']=count($data1);
           }else{
            $counts['rbc']=0;
           }

           if($data2){
            $counts['wbc']=count($data2);
           }else{
            $counts['wbc']=0;
           }

           if($data3){
            $counts['plt']=count($data3);
           }else{
            $counts['plt']=0;
           }

           if($data4){
            $counts['plsm']=count($data4);
           }else{
            $counts['plsm']=0;
           }

        //    ----------------------------chart data-------------------

        $rbc = new Rbc(); //model instantiated
        $q1="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM rbc where blood_bank_id=$bbid AND exp_date>CURDATE() GROUP BY blood_group";
        $dat1 = $rbc->query($q1);
    //     echo "<pre>";
    // print_r($data1);

    $wbc = new Wbc(); //model instantiated
    $q2="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM wbc where blood_bank_id=$bbid GROUP BY blood_group";
    $dat2 = $wbc->query($q2);
    

    $plsm = new Plasma(); //model instantiated
    $q3="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM plasma where blood_bank_id=$bbid AND exp_date>CURDATE() GROUP BY blood_group";
    $dat3 = $plsm->query($q3);

    $plt = new Platelettes(); //model instantiated
    $q4="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM platelets where blood_bank_id=$bbid AND exp_date>CURDATE() GROUP BY blood_group";
    $dat4 = $plt->query($q4);
    // -----------------------------------chart data end-----------------------

    if($_SERVER['REQUEST_METHOD'] === 'POST') {//-----------------ajax start
        

        $response = array("rbc" => $dat1, "wbc" => $dat2,"plt" => $dat3,"plsm" => $dat4);

        echo json_encode($response);
    } else {
        // $this->view('staff/dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4,'ess'=>$essentials]);  
        $this->view('staff/bbbsmanage', ['rows' => $counts]);//------------------ajax end

    }




        // $user->insert($arr);
        // $user->delete(25);
        // $bdc = new Bdcreq(); //model instantiated
        // $data = $bdc->findAll();
        // echo "<pre>";
        // print_r($data);

        // $data=$user->where('id', 1);
        //  $this->redirect('404');
        // $this->view('home');
    }
}