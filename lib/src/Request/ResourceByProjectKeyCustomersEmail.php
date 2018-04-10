<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class ResourceByProjectKeyCustomersEmail extends Resource
{
    /**
     * @return ResourceByProjectKeyCustomersEmailConfirm
     */
    public function confirm(): ResourceByProjectKeyCustomersEmailConfirm {
        return new ResourceByProjectKeyCustomersEmailConfirm($this->getUri() . '/confirm', $this->getArgs(), $this->getMapper());
    }


}
