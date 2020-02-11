<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderFromCartDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyOrders extends ApiResource
{
    public function importOrder(): ResourceByProjectKeyOrdersImport
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyOrdersImport($this->getUri() . '/import', $args, $this->getClient());
    }
    public function withOrderNumber(string $orderNumber = null): ResourceByProjectKeyOrdersOrderNumberByOrderNumber
    {
        $args = $this->getArgs();
        if (!is_null($orderNumber)) {
            $args['orderNumber'] = $orderNumber;
        }

        return new ResourceByProjectKeyOrdersOrderNumberByOrderNumber($this->getUri() . '/order-number={orderNumber}', $args, $this->getClient());
    }
    public function edits(): ResourceByProjectKeyOrdersEdits
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyOrdersEdits($this->getUri() . '/edits', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyOrdersByID($this->getUri() . '/{ID}', $args, $this->getClient());
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
