<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Me\MyOrderFromCartDraft;


class Resource85 extends Resource
{
    /**
     * @return Resource86
     */
    public function withIDValue($ID = null): Resource86 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource86($this->getUri() . '/{ID}', $args);
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
    public function post(MyOrderFromCartDraft $body): ByProjectKeyMeOrdersPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeOrdersPost($args['projectKey'], $body);
    }

}
