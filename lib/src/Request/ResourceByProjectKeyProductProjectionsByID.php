<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class ResourceByProjectKeyProductProjectionsByID extends Resource
{
    /**
     * @return ByProjectKeyProductProjectionsByIDGet
     */
    public function get(): ByProjectKeyProductProjectionsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsByIDGet($args['projectKey'], $args['ID']);
    }

}
