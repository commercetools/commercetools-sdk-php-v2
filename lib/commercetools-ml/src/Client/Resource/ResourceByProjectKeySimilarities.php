<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeySimilarities extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/similarities', $args, $client);
    }

    /**
     */
    public function products(): ResourceByProjectKeySimilaritiesProducts
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeySimilaritiesProducts($args, $this->getClient());
    }
}
