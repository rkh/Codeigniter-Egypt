<?php
class Page extends Controller
{
	function Page()
	{
		parent::Controller();
		$this->load->library('datamapper');
	}
	
	function index()
	{
		$s = new section();
		$s->name = '';
	}
}
