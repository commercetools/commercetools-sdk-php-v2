<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class ResourceByProjectKeyMeEmail extends Resource
{
    /**
     * @return ResourceByProjectKeyMeEmailConfirm
     */
    public function confirm(): ResourceByProjectKeyMeEmailConfirm {
        return new ResourceByProjectKeyMeEmailConfirm($this->getUri() . '/confirm', $this->getArgs(), $this->getMapper());
    }


}
