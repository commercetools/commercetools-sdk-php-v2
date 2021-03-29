<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Payment\PaymentDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyPayments extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/payments', $args, $client);
    }

    public function withKey(string $key = null): ResourceByProjectKeyPaymentsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyPaymentsKeyByKey($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyPaymentsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyPaymentsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyPaymentsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?PaymentDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PaymentDraft$body = null, array $headers = []): ByProjectKeyPaymentsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
