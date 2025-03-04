<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\State\StateDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStates extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/states', $args, $client);
    }

    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyStatesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyStatesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyStatesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyStatesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyStatesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyStatesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyStatesHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyStatesHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?StateDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StateDraft $body = null, array $headers = []): ByProjectKeyStatesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStatesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
