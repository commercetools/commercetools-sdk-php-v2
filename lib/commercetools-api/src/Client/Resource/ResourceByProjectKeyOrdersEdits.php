<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\OrderEdit\OrderEditDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersEdits extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyOrdersEditsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyOrdersEditsKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyOrdersEditsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyOrdersEditsByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyOrdersEditsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?OrderEditDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderEditDraft $body = null, array $headers = []): ByProjectKeyOrdersEditsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersEditsPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
