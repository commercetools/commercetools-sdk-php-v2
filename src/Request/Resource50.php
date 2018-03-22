<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource50 extends Resource
{
    /**
     * @return ByProjectKeyProductProjectionsKeyByKeyGet
     */
    public function get(): ByProjectKeyProductProjectionsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsKeyByKeyGet($args['projectKey'], $args['key']);
    }

}
