<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Category\CategoryUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCategoriesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/categories/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCategoriesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCategoriesByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CategoryUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryUpdate $body = null, array $headers = []): ByProjectKeyCategoriesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyCategoriesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
