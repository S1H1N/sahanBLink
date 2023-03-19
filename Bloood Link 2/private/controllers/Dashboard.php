<?php
$dir = dirname(__DIR__, 2);
require_once($dir . "/public/libraries/tcpdf/tcpdf.php");
class Dashboard extends Controller
{
    function index($id = '')
    {   
        $month=date('m');
        $year=date('Y');

        $bbid=$_SESSION['USER']->blood_bank_id;

        $essentials=array();
       

        // ---------------------------------this month bdc-------------------------------
            $bdc=new BLBdc();
       
            $data=$bdc->thismonthcamps("blood_bank_id",$bbid,"date",$month,$year);
            $essentials['bdccount']=count($data);

        // -------------------------------------this month bdc end-----------------------------

        // ---------------------------------this month donations-------------------------------
        $bdc=new Rawblood();
       
        $data=$bdc->thismonthdonations("blood_bank_id",$bbid,"collected_date",$month,$year);
        $essentials['donationcount']=count($data);

    // -------------------------------------this month donations end-----------------------------

    // ---------------------------------this month donors-------------------------------
    $bdc=new Rawblood();
       
    $data=$bdc->thismonthdonors("blood_bank_id",$bbid,"collected_date",$month,$year);
    $essentials['donorcount']=count($data);

// -------------------------------------this month donors end-----------------------------


            $rbc = new Rbc(); //model instantiated
            $q1="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM rbc where blood_bank_id=$bbid AND exp_date>CURDATE() GROUP BY blood_group";
            $data1 = $rbc->query($q1);
        //     echo "<pre>";
        // print_r($data1);

        $wbc = new Wbc(); //model instantiated
        $q2="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM wbc where blood_bank_id=$bbid GROUP BY blood_group";
        $data2 = $wbc->query($q2);
        

        $plsm = new Plasma(); //model instantiated
        $q3="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM plasma where blood_bank_id=$bbid AND exp_date>CURDATE() GROUP BY blood_group";
        $data3 = $plsm->query($q3);

        $plt = new Platelettes(); //model instantiated
        $q4="SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM platelets where blood_bank_id=$bbid AND exp_date>CURDATE() GROUP BY blood_group";
        $data4 = $plt->query($q4);


            
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $bdc = $this->load_model('Bdcreq');

            // $arr['fullname'] = "harini silva";
            // $arr['email'] = "hello@gmail.com";
            // $arr['nic'] = "200016206040";
            // $arr['mobile'] = "0703802708";
            // $arr['city'] = "auckland";
            // $arr['address'] = "1/90 mahiyangana road badulla";
            // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
            // $arr['profile_img'] = "";


        // $user->insert($arr);
        // $user->delete(25);
        // $bdc = new Bdcreq(); //model instantiated
        // $data = $bdc->findAll();

        // $data=$user->where('id', 1);
        // $rbc = new Rbc(); //model instantiated
        // $data1 = $rbc->findAll();

        // $wbc = new Wbc(); //model instantiated
        // $data2 = $wbc->findAll();

        // $plsm = new Plasma(); //model instantiated
        // $data3 = $plsm->findAll();

        // $plt = new Platelettes(); //model instantiated
        // $data4 = $plt->findAll();

        // $data=$user->where('id', 1);
        //  $this->view('dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);        //  $this->redirect('404');
        // $this->view('home');
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $data = array('key1' => 'value1', 'key2' => 'value2');
            // $data2 = array('key3' => 'value3', 'key4' => 'value4');
            // $data3 = array('key1' => 'value1', 'key2' => 'value2');
            // $data4 = array('key3' => 'value3', 'key4' => 'value4');

            $response = array("rbc" => $data1, "wbc" => $data2,"plt" => $data3,"plsm" => $data4);
                
            // $response2 = array("data3" => $data3, "data4" => $data4);

            // $full=array("res" => $response, "res2" => $response2) ;

            echo json_encode($response);
        } else {
            $this->view('staff/dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4,'ess'=>$essentials]);        
        }
    }
}