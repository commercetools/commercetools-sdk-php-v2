<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class ResourceByProjectKeyMessagesByID extends Resource
{
    /**
     * @return ByProjectKeyMessagesByIDGet
     */
    public function get(): ByProjectKeyMessagesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyMessagesByIDGet($args['projectKey'], $args['ID']);
    }

}
