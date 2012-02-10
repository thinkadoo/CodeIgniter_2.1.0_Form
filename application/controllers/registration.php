<?php

class Registration extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Register_model');

	}

	function index()
	{			
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('user_name', 'User Name', 'required|trim|xss_clean|max_length[255]');			
		$this->form_validation->set_rules('email', 'Email', 'xss_clean|valid_email|max_length[40]');			
		$this->form_validation->set_rules('phone', 'Phone', 'is_numeric|max_length[16]');
			
//		$this->form_validation->set_error_delimiters('<span class="error-message">', '</span>');
		$this->form_validation->set_error_delimiters('<div class="row"><div class="span4"><div class="alert"><strong>Warning! - </strong>', '</div></div></div>');



		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('Register_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'first_name' => set_value('first_name'),
					       	'last_name' => set_value('last_name'),
					       	'user_name' => set_value('user_name'),
					       	'email' => set_value('email'),
					       	'phone' => set_value('phone')
						);
					
			// run insert model to write data to db
		
			if ($this->Register_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('Registration/success');   // or whatever logic needs to occur
			}
			else
			{
			    echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}

	function success()
	{
        $this->load->view('Success_view');
	}

}