<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Payment\PaymentDraft;


class Resource37 extends Resource
{
    /**
     * @return Resource38
     */
    public function keyWithKeyValue($key = null): Resource38 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource38($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource39
     */
    public function withIDValue($ID = null): Resource39 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource39($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyPaymentsGet
     */
    public function get(): ByProjectKeyPaymentsGet {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsGet($args['projectKey']);
    }
    /**
     * @param PaymentDraft $body
     * @return ByProjectKeyPaymentsPost
     */
    public function post(PaymentDraft $body): ByProjectKeyPaymentsPost {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsPost($args['projectKey'], $body);
    }

}
