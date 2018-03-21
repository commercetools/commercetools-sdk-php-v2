<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Order\OrderFromCartDraft;


class Resource34 extends Resource
{
    /**
     * @return Resource35
     */
    public function import(): Resource35 {
        return new Resource35($this->getUri() . '/import', $this->getArgs());
    }
    /**
     * @return Resource36
     */
    public function withIDValue($ID = null): Resource36 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource36($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyOrdersGet
     */
    public function get(): ByProjectKeyOrdersGet {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersGet($args['projectKey']);
    }
    /**
     * @param OrderFromCartDraft $body
     * @return ByProjectKeyOrdersPost
     */
    public function post(OrderFromCartDraft $body): ByProjectKeyOrdersPost {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersPost($args['projectKey'], $body);
    }

}
