<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Review\ReviewUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyReviewsKeyByKey extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyReviewsKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ReviewUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ReviewUpdate $body = null, array $headers = []): ByProjectKeyReviewsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyReviewsKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyReviewsKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
