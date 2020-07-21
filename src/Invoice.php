<?php

namespace Hasandotprayoga\Xendit;

use Hasandotprayoga\Xendit\Traits\Create;

class Invoice extends Xendit
{
    use Create;
    
    protected $endpoint = '/v2/invoices';

    protected $requiredCreateParams = [
        'external_id', 
        'payer_email', 
        'description', 
        'amount'
    ];
}
