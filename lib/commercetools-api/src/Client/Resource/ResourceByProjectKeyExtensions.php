<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Extension\ExtensionDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyExtensions extends ApiResource
{
    /**
     * @psalm-param array<string, scalar> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/extensions', $args, $client);
    }

    public function withKey(string $key = null): ResourceByProjectKeyExtensionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyExtensionsKeyByKey($args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyExtensionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyExtensionsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyExtensionsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyExtensionsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ExtensionDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ExtensionDraft $body = null, array $headers = []): ByProjectKeyExtensionsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyExtensionsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
