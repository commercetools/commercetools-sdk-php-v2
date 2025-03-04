<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Review\ReviewUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyReviewsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/reviews/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyReviewsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyReviewsByIDHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsByIDHead($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ReviewUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ReviewUpdate $body = null, array $headers = []): ByProjectKeyReviewsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyReviewsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
