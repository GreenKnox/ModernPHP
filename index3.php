<?php

namespace Shop/type;

use Shop/Worker;

class Buyer extends Worker{
    // the buyer class inherits everything of the worker class
    public string $sex

    public function setSex($sex)
    {
        $this=>sex = $sex;

    }

    public function getSex()
    {
        return $this=>sex;
    }
}