<?php
//mailing_list.php is a codeigniter controller

class News extends CI_Controller{
    
}

class Mailing_list extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index(){
        
        $this->load->model('Mailing_list_model');
        $data['query'] = $this->Mailing_list_model->get_mailing_list(); 
        $data['title'] = "Adding a Record!";
        $data['style'] = "cerulean.css";
        $data['banner'] = "Here is our Web Site";
        $data['copyright'] = "Here is our copyright";
        $data['base_url'] = base_url();
        $this->load->view('header',$data);
    
        $this->load->view('mailing_list/add_mailing_list',$data);
        //echo $data['mailing_list'];
        $this->load->view('footer',$data);
    }//end of index()
    
        public function view($id){
        
        $this->load->model('Mailing_list_model');
        $data['query'] = $this->Mailing_list_model->get_id($id); 
        $data['title'] = "Here is our title tag!";
        $data['style'] = "cerulean.css";
        $data['banner'] = "Here is our Web Site";
        $data['copyright'] = "Here is our copyright";
        $data['base_url'] = base_url();
        $this->load->view('header',$data);
    
        $this->load->view('mailing_list/view_mailing_list_detail',$data);
        //echo $data['mailing_list'];
        $this->load->view('footer',$data);
    }//end of view
        
    public public function add()
    {//is a form to add a new record
        
    }//end of add
    
    public public function insert()
    {//will insert the data entered via add
        
    }//end insert
    
}

?>