<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\Extension\ExtensionDraft;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyExtensions extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyExtensionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyExtensionsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyExtensionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyExtensionsByID($this->getUri() . '/{ID}', $args, $this->getClient());
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
