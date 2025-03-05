<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Me\MyCartDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMeCarts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/me/carts', $args, $client);
    }

    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyMeCartsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyMeCartsByID($args, $this->getClient());
    }
    /**
     */
    public function replicate(): ResourceByProjectKeyMeCartsReplicate
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMeCartsReplicate($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyMeCartsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyMeCartsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?MyCartDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MyCartDraft $body = null, array $headers = []): ByProjectKeyMeCartsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMeCartsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
