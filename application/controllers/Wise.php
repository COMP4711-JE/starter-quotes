<?php

class Wise extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    
    function bingo() {
        $this->data['pagebody'] = 'justone';	 
        $record = $this->quotes->last();
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
    
}
