<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Payment\PaymentDraft;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyPayments extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyPaymentsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyPaymentsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyPaymentsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyPaymentsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyPaymentsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?PaymentDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PaymentDraft $body = null, array $headers = []): ByProjectKeyPaymentsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
