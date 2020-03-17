<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderFromCartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrders extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders', $args, $client);
    }

    public function importOrder(): ResourceByProjectKeyOrdersImport
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyOrdersImport($args, $this->getClient());
    }
    public function withOrderNumber(string $orderNumber = null): ResourceByProjectKeyOrdersOrderNumberByOrderNumber
    {
        $args = $this->getArgs();
        if (!is_null($orderNumber)) {
            $args['orderNumber'] = $orderNumber;
        }

        return new ResourceByProjectKeyOrdersOrderNumberByOrderNumber($args, $this->getClient());
    }
    public function edits(): ResourceByProjectKeyOrdersEdits
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyOrdersEdits($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyOrdersByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyOrdersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderFromCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderFromCartDraft $body = null, array $headers = []): ByProjectKeyOrdersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
