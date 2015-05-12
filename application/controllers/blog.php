<?php if ( ! defined('BASEPATH'))
	exit ('No direct script access allowed');

	class Blog extends CI_Controller {
	
		function __construct()
		{
			parent::__construct();
			
			$this->load->helper('url');
		}
		
		function index()
		{
			/* $this->load->view("hello_ci"); */
			$this->load->view("awal_blog");
		}
		
		function komentar()
		{
			echo "Ini adalah fungsi komentar";
		}
		
		/* function index()
		{
			$data['judul']="Welcome to My Blog";
			$data['isi']="";
			$this->load->view("blog_view", $data);
		} */
		
		public function ambil_var($a, $b)
		{
			echo "var a:$a var b:$b";
		}
		
		public function cetak_view()
		{
			$this->load->view("cetak_blog");
		}
	}
	
