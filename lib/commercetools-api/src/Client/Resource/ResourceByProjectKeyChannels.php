<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Channel\ChannelDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyChannels extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/channels', $args, $client);
    }

    public function withId(string $ID = null): ResourceByProjectKeyChannelsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyChannelsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyChannelsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyChannelsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ChannelDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ChannelDraft $body = null, array $headers = []): ByProjectKeyChannelsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyChannelsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
