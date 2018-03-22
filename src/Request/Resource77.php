<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource77 extends Resource
{
    /**
     * @return Resource78
     */
    public function confirm(): Resource78 {
        return new Resource78($this->getUri() . '/confirm', $this->getArgs());
    }


}
