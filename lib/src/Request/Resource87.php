<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;


class Resource87 extends Resource
{
    /**
     * @return ByProjectKeyMeOrdersByIDGet
     */
    public function get(): ByProjectKeyMeOrdersByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyMeOrdersByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param Update $body
     * @return ByProjectKeyMeOrdersByIDPost
     */
    public function post(Update $body = null): ByProjectKeyMeOrdersByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeOrdersByIDPost($args['projectKey'], $args['ID'], $body);
    }

}
