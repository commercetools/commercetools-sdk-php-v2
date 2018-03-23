<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Order\OrderUpdate;



class Resource36 extends Resource
{
    /**
     * @return ByProjectKeyOrdersOrderNumberByOrderNumberGet
     */
    public function get(): ByProjectKeyOrdersOrderNumberByOrderNumberGet {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersOrderNumberByOrderNumberGet($args['projectKey'], $args['orderNumber']);
    }
    /**
     * @param OrderUpdate $body
     * @return ByProjectKeyOrdersOrderNumberByOrderNumberPost
     */
    public function post(OrderUpdate $body): ByProjectKeyOrdersOrderNumberByOrderNumberPost {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersOrderNumberByOrderNumberPost($args['projectKey'], $args['orderNumber'], $body);
    }
    /**
     * @return ByProjectKeyOrdersOrderNumberByOrderNumberDelete
     */
    public function delete(): ByProjectKeyOrdersOrderNumberByOrderNumberDelete {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersOrderNumberByOrderNumberDelete($args['projectKey'], $args['orderNumber']);
    }

}
