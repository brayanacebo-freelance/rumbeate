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
		$this->template->build('index');
	}

    // -----------------------------------------------------------------

    public function terminos_y_condiciones()
    {
        $this->template->build('terminos');
    }

    // -----------------------------------------------------------------

    public function politicas_de_privacidad()
    {
        $this->template->build('politicas');
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
    	$this->form_validation->set_rules('numero_factura', 'Numero de factura');
      $this->form_validation->set_rules('terminos', 'Términos y condiciones', 'required|trim');
      $this->form_validation->set_rules('politicas', 'Políticas de privacidad', 'required|trim');
    	
    	$statusJson = 'error';
    	$msgJson = 'Por favor intenta de mas tarde';
    	
    	if ($this->form_validation->run() === TRUE)
    	{

    		$post = (object) $this->input->post(null);

    		$data = array(
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

        $config['upload_path'] = './' . UPLOAD_PATH . '';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2050;
        $config['max_width'] = 1000;
        $config['max_height'] = 700;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

                // imagen
        $img = $_FILES['image']['name'];
        if (!empty($img)) {
          if ($this->upload->do_upload('image')) {
            $datos = array('upload_data' => $this->upload->data());
            $path = UPLOAD_PATH . $datos['upload_data']['file_name'];
            $img = array(
              'archivo' => $path
              );
            $data = array_merge($data, $img);
          } else {
            $statusJson = 'error';
            $msgJson = $this->upload->display_errors();
          }
        }

        //Validate 
        if( $this->registro_model->insert($data))
        {
         $statusJson = 'success';
         $msgJson = 'Registro exitoso';
       }
       else
       {
         $statusJson = 'error';
         $msgJson = 'Error Mailing, Contact the Webmaster';
       }

     }else{
       $statusJson = 'error';
       $msgJson = validation_errors();
     }

     $this->template->set('statusJson', $statusJson)
                    ->set('msgJson', $msgJson)
                    ->build('index');

   }

 }