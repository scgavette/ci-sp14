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
        $data['title'] = "Here is our title tag!";
        $data['style'] = "cerulean.css";
        $data['banner'] = "Here is our Web Site";
        $data['copyright'] = "Here is our copyright";
        $data['base_url'] = base_url();
        $this->load->view('header',$data);
    
        $this->load->view('mailing_list/view_mailing_list',$data);
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
        
    public function add()
    {//is a form to add a new record
        $this->load->helper("form");
        $data['title'] = "Adding a Record!";
        $data['style'] = "cerulean.css";
        $data['banner'] = "add a record";
        $data['copyright'] = "Here is our copyright";
        $data['base_url'] = base_url();
        $this->load->view('header',$data);
    
        $this->load->view('mailing_list/add_mailing_list',$data);
        //echo $data['mailing_list'];
        $this->load->view('footer',$data);
    }//end of add
    
    public function insert()
    {//will insert the data entered via add
        $this->load->model('Mailing_list_model');
        $this->load->library('form_validation');
        
        //must have at least one validation rule to insert
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');

        if($this->form_validation->run()==FALSE)
        {//failed validation send back to form
            //VIEW DATA ON FALUE GOES HERE
            $this->load->helper("form");
            $data['title'] = "Adding a Record!";
            $data['style'] = "cerulean.css";
            $data['banner'] = "Data Entry Error!";
            $data['copyright'] = "Here is our copyright";
            $data['base_url'] = base_url();
            $this->load->view('header',$data);
        
            $this->load->view('mailing_list/add_mailing_list',$data);
            //echo $data['mailing_list'];
            $this->load->view('footer',$data);
            
            
            echo 'insert failed';
            
     
        }else{//insert data
            $post = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'state_code' => $this->input->post('state_code'),
            'zip_postal' => $this->input->post('zip_postal'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'bio' => $this->input->post('bio'),
            'interests' => $this->input->post('interests'),
            'num_tours' => $this->input->post('num_tours')
            );
            
            $this->Mailing_list_model->insert($post);
            echo "data here";
        }
    }//end insert
    
}

?>