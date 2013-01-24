<?php

Namespace Controller ;

class Index extends Base {

    public function execute($pageVars) {
        if ( $pageVars["route"]["action"] == "home" ) {
            return array ("type"=>"view", "view"=>"Index", "pageVars"=>$this->content); }
        return array ("type"=>"view", "view"=>"Index", "pageVars"=>$this->content);
    }

}