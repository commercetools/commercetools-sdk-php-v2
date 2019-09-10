<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Channel\ChannelUpdate;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyChannelsByID extends ApiResource
{
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyChannelsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyChannelsByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?ChannelUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ChannelUpdate $body = null, array $headers = []): ByProjectKeyChannelsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyChannelsByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyChannelsByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyChannelsByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
