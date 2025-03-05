<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Inventory\InventoryEntryDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInventory extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/inventory', $args, $client);
    }

    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyInventoryByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInventoryByID($args, $this->getClient());
    }
    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyInventoryKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInventoryKeyByKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInventoryGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInventoryGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInventoryHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInventoryHead($args['projectKey'], $body, $headers, $this->getClient());
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
