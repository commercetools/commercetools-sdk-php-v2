<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource28 extends Resource
{
    /**
     * @param $body
     * @return ByProjectKeyGraphqlPost
     */
    public function post($body): ByProjectKeyGraphqlPost {
        $args = $this->getArgs();
        return new ByProjectKeyGraphqlPost($args['projectKey'], $body);
    }

}
