<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource14 extends Resource
{
    /**
     * @return Resource15
     */
    public function confirm(): Resource15 {
        return new Resource15($this->getUri() . '/confirm', $this->getArgs());
    }


}
