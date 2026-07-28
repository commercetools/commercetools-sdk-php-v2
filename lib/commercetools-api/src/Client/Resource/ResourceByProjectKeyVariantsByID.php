<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Variant\VariantUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyVariantsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/variants/{ID}', $args, $client);
    }

    /**
     */
    public function images(): ResourceByProjectKeyVariantsByIDImages
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyVariantsByIDImages($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyVariantsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyVariantsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyVariantsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyVariantsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?VariantUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?VariantUpdate $body = null, array $headers = []): ByProjectKeyVariantsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyVariantsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyVariantsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyVariantsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
