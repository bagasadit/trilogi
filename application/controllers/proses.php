<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {
    public function input(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $message = $this->input->post('message');
        $this->Models->send_message($name, $email, $message);
        $_SESSION['send_message_success'] = 1;
        redirect('contact');
    }

    public function start_project(){
        $email = $this->input->post('email');
        $this->Models->input_project($email);
        $_SESSION['start_project_success'] = 1;
        redirect('start-project');
    }

    public function proseslogin(){
        if(isset($_POST["submit"])){
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if($email === 'admin@phixit.com' && $password === 'admin'){
                    $_SESSION["success_login"] = 1;
                    $_SESSION["loginadmin"] = 1;
                    redirect("admin/home");
            } else {
                    $_SESSION["login_failed"] = 1;
                    redirect("admin/login");
            }
        } else {

        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

    public function change_status(){
        $id = $this->uri->segment(3);
        $this->Models->change_status_project($id);
        redirect('admin/project');
    }

    public function delete_messages(){
        $id = $this->uri->segment(3);
        $this->Models->delete_messages($id);
        $_SESSION['delete_success'] = 1;
        redirect('admin/messages');
    }
}
