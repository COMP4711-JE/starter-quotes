<?php

class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}
        
	function index()
	{
		$this->data['pagebody'] = 'justone';	

                $record = $this->quotes->last();
                $this->data = array_merge($this->data, $record);

		$this->render();
	}
        

}
