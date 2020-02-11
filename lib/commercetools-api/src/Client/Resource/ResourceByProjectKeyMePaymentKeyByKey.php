<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Me\MyPaymentUpdate;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMePaymentKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?MyPaymentUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyPaymentUpdate $body = null, array $headers = []): ByProjectKeyMePaymentKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMePaymentKeyByKeyPost((string) $args['projectKey'], (string) $args['key'], $body, $headers, $this->getClient());
    }

}
