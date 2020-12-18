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
class ResourceByProjectKeyMeCartsKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/carts/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?MyCartUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCartUpdate $body = null, array $headers = []): ByProjectKeyMeCartsKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
