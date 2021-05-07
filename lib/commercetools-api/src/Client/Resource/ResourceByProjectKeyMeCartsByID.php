<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyCartUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeCartsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/carts/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeCartsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyCartUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCartUpdate $body = null, array $headers = []): ByProjectKeyMeCartsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyMeCartsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
