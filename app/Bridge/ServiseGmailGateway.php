<?php

namespace App\Bridge;

class ServiseGmailGateway implements Adaptor
{
    protected $gmailServise;
    
    public function __construct(GmailServise $gmailServise)
    {
        $this->gmailServise = $gmailServise;
    }
    
    public function method(){
        if(($this->gmailServise->send) == "send")
        {
            return "gmail";
        }
    }
}




