<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\DiscountGroup\DiscountGroupUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyDiscountGroupsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/discount-groups/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyDiscountGroupsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyDiscountGroupsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?DiscountGroupUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?DiscountGroupUpdate $body = null, array $headers = []): ByProjectKeyDiscountGroupsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyDiscountGroupsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountGroupsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
