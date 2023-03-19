<?php
class Bsmanage extends Controller
{
    function index($id = '')
    {


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
        $rbc = new Rbc(); //model instantiated
        $data1 = $rbc->findAll();

        $wbc = new Wbc(); //model instantiated
        $data2 = $wbc->findAll();

        $plsm = new Plasma(); //model instantiated
        $data3 = $plsm->findAll();

        $plt = new Platelettes(); //model instantiated
        $data4 = $plt->findAll();

        // $data=$user->where('id', 1);
        //  $this->view('staff/bsmanage', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);
        //  $this->redirect('404');
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
            $this->view('staff/bsmanage', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4]);   
        }
    }
}