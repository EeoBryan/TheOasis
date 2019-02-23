<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Controller names must start with Capital letter
// Otherwise it will generate an error

class Main extends CI_Controller {

    public function view($page = 'home')
    {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    // pre-defined function by the framework
                    show_404();
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
    }

    public function index()
    {
        $this->load->model("Events_model");
        $data["fetch_data"] = $this->Events_model->fetch_data();
        $this->load->view('pages/home');
    }
}
