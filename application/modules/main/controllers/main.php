<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MX_Controller {

	public function __construct()
	{
        parent::__construct();
		$this->_view = 'main_view';
        $this->load->helper('url');
    }
	
	public function index()
	{
		echo base_url();
	}
}

/* End of filemain.php */
/* Location: ./application/controllers/main.php */