<?php

namespace Bhagat\LaravelSaml2\Events;

class Saml2LogoutEvent extends Saml2Event {

    function __construct($idp)
    {
        parent::__construct($idp);
    }

}
