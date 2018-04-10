<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerSignin;


class ResourceByProjectKeyLogin extends Resource
{
    /**
     * @param CustomerSignin $body
     * @return ByProjectKeyLoginPost
     */
    public function post(CustomerSignin $body = null): ByProjectKeyLoginPost {
        $args = $this->getArgs();
        return new ByProjectKeyLoginPost($args['projectKey'], $body);
    }

}
