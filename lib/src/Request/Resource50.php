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
     * @return ByProjectKeyProductProjectionsSuggestGet
     */
    public function get(): ByProjectKeyProductProjectionsSuggestGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsSuggestGet($args['projectKey']);
    }

}
