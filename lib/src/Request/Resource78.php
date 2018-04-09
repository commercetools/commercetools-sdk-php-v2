<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource78 extends Resource
{
    /**
     * @return Resource79
     */
    public function confirm(): Resource79 {
        return new Resource79($this->getUri() . '/confirm', $this->getArgs(), $this->getMapper());
    }


}
