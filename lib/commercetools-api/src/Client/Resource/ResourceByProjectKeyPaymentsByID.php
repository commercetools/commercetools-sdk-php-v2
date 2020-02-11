<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Payment\PaymentUpdate;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyPaymentsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyPaymentsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentsByIDGet((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?PaymentUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PaymentUpdate $body = null, array $headers = []): ByProjectKeyPaymentsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentsByIDPost((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyPaymentsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentsByIDDelete((string) $args['projectKey'], (string) $args['ID'], $body, $headers, $this->getClient());
    }
}
