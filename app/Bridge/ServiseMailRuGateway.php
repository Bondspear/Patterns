<?php

namespace App\Bridge;

class ServiseMailRuGateway implements Adaptor
{
    protected $mailRuServise;
    
    public function __construct(MailRuServise $mailRuServise)
    {
        $this->mailRuServise = $mailRuServise;
    }
    
    public function method(){
        if(($this->mailRuServise->send) == "send2")
        {
            return "mailRu";
        }
    }
}



