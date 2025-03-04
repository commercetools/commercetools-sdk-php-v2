<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\ReplicaCartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCartsReplicate extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/carts/replicate', $args, $client);
    }

    /**
     * @psalm-param ?ReplicaCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ReplicaCartDraft $body = null, array $headers = []): ByProjectKeyCartsReplicatePost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCartsReplicatePost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
