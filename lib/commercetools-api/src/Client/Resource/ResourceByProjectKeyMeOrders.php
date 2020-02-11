<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyOrderFromCartDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyMeOrders extends ApiResource
{
    public function withId(string $ID = null): ResourceByProjectKeyMeOrdersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMeOrdersByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeOrdersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeOrdersGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyOrderFromCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyOrderFromCartDraft $body = null, array $headers = []): ByProjectKeyMeOrdersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeOrdersPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
