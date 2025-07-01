<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyPaymentMethodsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/payment-methods/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyPaymentMethodsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyPaymentMethodsKeyByKeyHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsKeyByKeyHead($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?PaymentMethodUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PaymentMethodUpdate $body = null, array $headers = []): ByProjectKeyPaymentMethodsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyPaymentMethodsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
