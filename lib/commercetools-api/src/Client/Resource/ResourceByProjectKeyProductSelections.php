<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductSelection\ProductSelectionDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyProductSelections extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-selections', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyProductSelectionsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyProductSelectionsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyProductSelectionsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyProductSelectionsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyProductSelectionsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyProductSelectionsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ProductSelectionDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ProductSelectionDraft $body = null, array $headers = []): ByProjectKeyProductSelectionsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyProductSelectionsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
