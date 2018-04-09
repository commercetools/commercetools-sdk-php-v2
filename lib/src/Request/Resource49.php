<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource49 extends Resource
{
    /**
     * @param $body
     * @return ByProjectKeyProductProjectionsSearchPost
     */
    public function post($body = null): ByProjectKeyProductProjectionsSearchPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsSearchPost($args['projectKey'], $body);
    }
    /**
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function get(): ByProjectKeyProductProjectionsSearchGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductProjectionsSearchGet($args['projectKey']);
    }

}
