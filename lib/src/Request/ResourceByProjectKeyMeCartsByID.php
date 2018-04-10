<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class ResourceByProjectKeyMeCartsByID extends Resource
{
    /**
     * @return ByProjectKeyMeCartsByIDGet
     */
    public function get(): ByProjectKeyMeCartsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyMeCartsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param Update $body
     * @return ByProjectKeyMeCartsByIDPost
     */
    public function post(Update $body = null): ByProjectKeyMeCartsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeCartsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyMeCartsByIDDelete
     */
    public function delete(): ByProjectKeyMeCartsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyMeCartsByIDDelete($args['projectKey'], $args['ID']);
    }

}
