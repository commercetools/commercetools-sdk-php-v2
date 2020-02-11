<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Cart\CartDraft;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyCarts extends ApiResource
{
    public function replicate(): ResourceByProjectKeyCartsReplicate
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCartsReplicate($this->getUri() . '/replicate', $args, $this->getClient());
    }
    public function withCustomerId(string $customerId = null): ResourceByProjectKeyCartsCustomerIdByCustomerId
    {
        $args = $this->getArgs();
        if (!is_null($customerId)) {
            $args['customerId'] = $customerId;
        }

        return new ResourceByProjectKeyCartsCustomerIdByCustomerId($this->getUri() . '/customer-id={customerId}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyCartsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCartsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCartsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDraft $body = null, array $headers = []): ByProjectKeyCartsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
