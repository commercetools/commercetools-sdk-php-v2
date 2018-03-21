<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class Resource58 extends Resource
{
    /**
     * @return ByProjectKeyShippingMethodsKeyByKeyGet
     */
    public function get(): ByProjectKeyShippingMethodsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param Update $body
     * @return ByProjectKeyShippingMethodsKeyByKeyPost
     */
    public function post(Update $body): ByProjectKeyShippingMethodsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyShippingMethodsKeyByKeyDelete
     */
    public function delete(): ByProjectKeyShippingMethodsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
