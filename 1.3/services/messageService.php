<?php
class messageService
{
    private $errors;
    private $input_errors;
    private $infos;

    function __construct() {

        $this->errors = $_SESSION['commonErrors'];
        $_SESSION['commonErrors'] = [];

        $this->input_errors = $_SESSION['errors'];
        $_SESSION['errors'] = [];

        $this->infos = $_SESSION['msgs'];
        $_SESSION['msgs'] = [];
    }
    function CountErrors(){
        return count($this->errors);
    }
    function CountInputErrors(){
        return count($this->input_errors);
    }
    function CountInfos(){
        return count($this->infos);
    }
    function CountNewErrors(){
        return count($_SESSION['commonErrors']);
    }
    function CountNewInputErrors(){
        return count($_SESSION['errors']);
    }
    function CountNewInfos(){
        return count($_SESSION['msgs']);
    }
    function GetInputErrors(){
        return $this->input_errors ? $this->input_errors : null;
    }
    function AddMessage( $type, $msg, $key = null ) {

    }
    function ShowErrors() {
        $output="";
        foreach ( $this->errors as $error )
        {
            $output.=`<div class="error">$error</div>`;
        }
        print $output;
    }
    function ShowInfos() {
        $output="";
        foreach ( $this->infos as $msg )
        {
            $output.=`<div class="msgs">$msg</div>`;
        }
        print $output;
    }
}