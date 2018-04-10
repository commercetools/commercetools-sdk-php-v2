<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Order\OrderUpdate;



class ResourceByProjectKeyOrdersByID extends Resource
{
    /**
     * @return ByProjectKeyOrdersByIDGet
     */
    public function get(): ByProjectKeyOrdersByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param OrderUpdate $body
     * @return ByProjectKeyOrdersByIDPost
     */
    public function post(OrderUpdate $body = null): ByProjectKeyOrdersByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyOrdersByIDDelete
     */
    public function delete(): ByProjectKeyOrdersByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersByIDDelete($args['projectKey'], $args['ID']);
    }

}
