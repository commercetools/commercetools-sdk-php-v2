<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource83 extends Resource
{
    /**
     * @param $body
     * @return ByProjectKeyMeLoginPost
     */
    public function post($body = null): ByProjectKeyMeLoginPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeLoginPost($args['projectKey'], $body);
    }

}
