<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Common\Update;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeOrdersByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/orders/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeOrdersByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeOrdersByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?Update $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?Update $body = null, array $headers = []): ByProjectKeyMeOrdersByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeOrdersByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
