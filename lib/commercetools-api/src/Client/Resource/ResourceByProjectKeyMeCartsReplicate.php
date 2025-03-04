<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\ReplicaMyCartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeCartsReplicate extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/carts/replicate', $args, $client);
    }

    /**
     * @psalm-param ?ReplicaMyCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ReplicaMyCartDraft $body = null, array $headers = []): ByProjectKeyMeCartsReplicatePost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsReplicatePost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
