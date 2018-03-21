<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource76 extends Resource
{
    /**
     * @return Resource77
     */
    public function confirm(): Resource77 {
        return new Resource77($this->getUri() . '/confirm', $this->getArgs());
    }


}
