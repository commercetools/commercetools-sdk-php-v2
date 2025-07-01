<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyPaymentMethods extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/payment-methods', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyPaymentMethodsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyPaymentMethodsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyPaymentMethodsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyPaymentMethodsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyPaymentMethodsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyPaymentMethodsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?PaymentMethodDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PaymentMethodDraft $body = null, array $headers = []): ByProjectKeyPaymentMethodsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
