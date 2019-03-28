<?php
 /** @Author: tran manh                   
 * @Email: dangtranmanh051187@gmail.com 
 * @Website: http://www.techtology 4.0  
 * @Copyright: 2019 - 2020      
 *   _         _             _  
 *  | |\     /| | __ _ _ __ | |__   
 *  | | \   / | |/ _` | '_ \| '_ \  
 *  | |\_\_/_/| | (_| | | | | | | | 
 *  |_|       |_|\__,_|_| | | | | |
 *                 (.)    
 */
 if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }
   
    public function index(){ 
        $data = array();      
        $this->load->view('welcome_message',$data);
        $html = $this->output->get_output();
                // Load pdf library
        $this->load->library('pdf');
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->render();
        // Output the generated PDF (1 = download and 0 = preview)
        $this->pdf->stream($name, array("Attachment"=> 0));
    }
  

}

