<?php
//mailing_list.php is a codeigniter controller

class News extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index(){
        $request = "https://news.google.com/news?pz=1&cf=all&ned=us&output=rss";
        $this->load->model('News_model');
        $data['xml'] = $this->News_model->get_news($request); 
        $data['title'] = "Here is our title tag!";
        $data['style'] = "cerulean.css";
        $data['banner'] = "Here is our Web Site";
        $data['copyright'] = "Here is our copyright";
        $data['base_url'] = base_url();
        $this->load->view('header',$data);
    
        $this->load->view('news_view',$data);
        //echo $data['mailing_list'];
        $this->load->view('footer',$data);
    }
    

    
}

?>