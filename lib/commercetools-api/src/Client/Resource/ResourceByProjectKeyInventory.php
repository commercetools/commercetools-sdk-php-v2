<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Inventory\InventoryEntryDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyInventory extends ApiResource
{
    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyInventoryByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInventoryByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyInventoryGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInventoryGet($args['projectKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?InventoryEntryDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?InventoryEntryDraft $body = null, array $headers = []): ByProjectKeyInventoryPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInventoryPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
