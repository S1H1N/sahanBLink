<?php
class Removedefect extends Controller
{
    function index($id = '')
    {
        $arr=array();
        $id=$_GET['id'];

        $don=new BLDonor();
        $def=new BLDefect();
        $data=$def->where("defect_id",$id);

        $donid=$data[0]->donor_id;


        if(!Auth::logged_in()){
            $this->redirect('login');
        }


        if($id){
            
            

            $arr['is_defect']=0;
            $def->deletedefect($id);
            $don->update($donid,$arr);

            $this->redirect('mydefectblood');

        }

        
        $this->view('home', ['rows' => $data[0]]);
       
    }
}