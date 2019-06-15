<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home') {
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                show_404();
        }
        $data['title'] = ucfirst($page);
        // select data
        switch($page){
          case 'home';
        	   $data['pages'] = 'home';
        	break;
        	case 'about';
                $data['pages'] = 'about';
        	break;
            case 'blog';
                $data['pages'] = 'blog';
            break;
            case 'services';
                $data['pages'] = 'services';
            break;
            case 'work';
                $data['pages'] = 'work';
            break;
            case 'detail-team';
                $data['pages'] = 'detail_team';
            break;
            case 'contact';
                $data['pages'] = 'contact';
            break;
            case 'detail-blog';
                $data['pages'] = 'detail_blog';
            break;
            case 'detail-work';
                $data['pages'] = 'detail_work';
            break;
            case 'start-project';
                $data['pages'] = 'start_project';
            break;
      	}
        // default
        $this->load->view('masterpages/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('masterpages/footer', $data);
	}
}
