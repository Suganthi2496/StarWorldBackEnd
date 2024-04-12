<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_apis extends CI_Controller {

	public function index()
	{
		$this->load->model('star_world_model');
		$posts = $this->star_world_model->get_posts();
		$res = array(
			'status' => true,
			'data' => $posts
		) ;
        echo json_encode($res);
	}
}
