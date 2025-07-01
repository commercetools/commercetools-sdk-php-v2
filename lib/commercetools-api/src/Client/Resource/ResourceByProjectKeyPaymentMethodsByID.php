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
class ResourceByProjectKeyPaymentMethodsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/payment-methods/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyPaymentMethodsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyPaymentMethodsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?PaymentMethodUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?PaymentMethodUpdate $body = null, array $headers = []): ByProjectKeyPaymentMethodsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyPaymentMethodsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyPaymentMethodsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
