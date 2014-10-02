<?php



defined('BASEPATH') OR exit('No direct script access allowed');



/**

 * @author Brayan Acebo

 */

class Home extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('registro_model');
	}
	
    // -----------------------------------------------------------------



	public function index()
	{
		$this->template
		->build('index');
	}


    /*
     *Enviar correo
     */

    function send()
    {

    	$this->form_validation->set_rules('cedula', 'Cedula', 'required|trim|max_length[12]');
    	$this->form_validation->set_rules('sexo', 'Sexo', 'required|trim');
    	$this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
    	$this->form_validation->set_rules('apellidos', 'Apellidos', 'required|trim');
    	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    	$this->form_validation->set_rules('ciudad', 'Ciudad', 'required|trim');
    	$this->form_validation->set_rules('celular', 'Celular', 'required|trim');
    	$this->form_validation->set_rules('fecha_nacimiento', 'Fecha de nacimiento', 'required|trim');
    	$this->form_validation->set_rules('numero_factura', 'Numero de factura', 'required|trim');
    	
    	$statusJson = 'error';
    	$msgJson = 'Por favor intenta de mas tarde';
    	
    	if ($this->form_validation->run() === TRUE)
    	{

    		$post = (object) $this->input->post(null);

    		$data['post'] = array(
    			'cedula' => $post->cedula,
    			'sexo' => $post->sexo,
    			'nombre' => $post->nombre,
    			'apellidos' => $post->apellidos,
    			'email' => $post->email,
    			'ciudad' => $post->ciudad,
    			'celular' => $post->celular,
    			'fecha_nacimiento' => $post->fecha_nacimiento,
    			'numero_factura' => $post->numero_factura
    			);

            //Validate sendmail
    		if( $this->registro_model->insert($data['post']))
    		{
				// $this->send_email_to_user($data['post'], $contact_us->email);
                //$this->session->set_flashdata('success', 'Su mensaje a sido enviado');
                //redirect(base_url().'/contact_us');
    			$statusJson = '';
    			$msgJson = 'Su mensaje ha sido enviado';
    		}
    		else
    		{
                //$this->session->set_flashdata('error', 'Error Mailing, Contact the Webmaster');
                //redirect(base_url().'/contact_us');
    			$statusJson = 'error';
    			$msgJson = 'Error Mailing, Contact the Webmaster';
    		}
  //       } else {

  //           //$this->session->set_flashdata('error', validation_errors());
  //           //redirect(base_url().'/contact_us');
		// 	$statusJson = 'error';
		// 	$msgJson = validation_errors();
  //       }
		// echo json_encode(array('status' => $statusJson, 'msg' => $msgJson));
    		echo 'status: '.$statusJson.' msg: '.$msgJson;
    	}
    }


	// /**
	//  * Send an email
	//  *
	//  * @param array $comment The comment data.
	//  * @param array $entry The entry data.
	//  * @return boolean 
	//  */
	// private function send_email_to_user($data, $admin_email)
	// {
	// 	$this->load->library('email');		
	// 	$this->load->library('user_agent');
    
	// 	Events::trigger('email', array(
	// 		'name' => $data['name'],
	// 		'email' => $data['email'],
	// 		'phone' => $data['phone'],
	// 		'company' => $data['company'],
	// 		'message' => $data['message'],
	// 		'slug' => 'contact',
	// 		/*'email' => Settings::get('contact_email'), // se manda el correo a al de la configuración del pyro*/
	// 		'to' => $admin_email,
	// 	), 'array');
	// }
}