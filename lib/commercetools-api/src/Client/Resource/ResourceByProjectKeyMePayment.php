<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyMePayment extends ApiResource
{
    /**
     * @psalm-param scalar $key
     *
     * @param null|mixed $key
     */
    public function keyWithKeyValue($key = null): ResourceByProjectKeyMePaymentKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyMePaymentKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withIDValue($ID = null): ResourceByProjectKeyMePaymentByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMePaymentByID($this->getUri().'/{ID}', $args, $this->getClient());
    }
}
