<?php

namespace Hasandotprayoga\Xendit\Traits;

trait Get
{
    public function get($id)
    {
        $url = $this->endpoint . '/' . $id;

        return $this->request('GET', $url, []);
    }
}
