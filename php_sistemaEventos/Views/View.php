<?php
namespace Views;

class View
{
    private $fileName;
    private $header;
    private $footer;
    public function __construct($fileName, $header = 'header', $footer = 'footer')
    {
        $this->fileName = $fileName;        
        $this->header = $header;
        $this->footer = $footer;
        
    }
    
    //Função para renderizar a página
    // parameter -> parametros em array que posso passar na hora de renderizar
    public function render($parameter = []){
        include('pages/templates/'.$this->header.'.php');
        include('pages/'.$this->fileName.'.php');
        include('pages/templates/'.$this->footer.'.php');
    }
}
