<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Me\MyOrderFromCartDraft;


class ResourceByProjectKeyMeOrders extends Resource
{
    /**
     * @return ResourceByProjectKeyMeOrdersByID
     */
    public function withId($ID = null): ResourceByProjectKeyMeOrdersByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyMeOrdersByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyMeOrdersGet
     */
    public function get(): ByProjectKeyMeOrdersGet {
        $args = $this->getArgs();
        return new ByProjectKeyMeOrdersGet($args['projectKey']);
    }
    /**
     * @param MyOrderFromCartDraft $body
     * @return ByProjectKeyMeOrdersPost
     */
    public function post(MyOrderFromCartDraft $body = null): ByProjectKeyMeOrdersPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeOrdersPost($args['projectKey'], $body);
    }

}
