<?php
class Changepic extends Controller
{
    function index()
    {
        $user = new User();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $data = $user->where('id', Auth::getid());

        $data = $data[0];
        $image=new Image();
        if ($_POST>0) {
           if($filename = $image->pic_validate()){
                $id = Auth::getid();
                
                $arr['profile_img'] = $filename;
                $user->update($id, $arr);
                $this->redirect('profile');
           }
        }

        $this->view('changepic', ['rows' => $data]);
    }

}