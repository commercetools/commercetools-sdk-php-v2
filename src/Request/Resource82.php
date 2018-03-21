<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource82 extends Resource
{
    /**
     * @return ByProjectKeyMeActiveCartGet
     */
    public function get(): ByProjectKeyMeActiveCartGet {
        $args = $this->getArgs();
        return new ByProjectKeyMeActiveCartGet($args['projectKey']);
    }

}
