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
     * @param $body
     * @return ByProjectKeyMeLoginPost
     */
    public function post($body): ByProjectKeyMeLoginPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeLoginPost($args['projectKey'], $body);
    }

}
