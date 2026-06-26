<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Variant\VariantDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyVariants extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/variants', $args, $client);
    }

    /**
     */
    public function bulk(): ResourceByProjectKeyVariantsBulk
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyVariantsBulk($args, $this->getClient());
    }
    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyVariantsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyVariantsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyVariantsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyVariantsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyVariantsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyVariantsGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?VariantDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?VariantDraft $body = null, array $headers = []): ByProjectKeyVariantsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyVariantsPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyVariantsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyVariantsHead($args['projectKey'], $body, $headers, $this->getClient());
    }
}
