<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\CartDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCarts extends ApiResource
{
    public function replicate(): ResourceByProjectKeyCartsReplicate
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCartsReplicate($this->getUri().'/replicate', $args, $this->getClient());
    }

    public function withId(string $ID = null): ResourceByProjectKeyCartsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCartsByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
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
