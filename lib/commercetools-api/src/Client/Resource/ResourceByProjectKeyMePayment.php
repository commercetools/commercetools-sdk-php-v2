<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMePayment extends ApiResource
{
    public function keyWithKeyValue(string $key = null): ResourceByProjectKeyMePaymentKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyMePaymentKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withIDValue(string $ID = null): ResourceByProjectKeyMePaymentByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMePaymentByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

}
