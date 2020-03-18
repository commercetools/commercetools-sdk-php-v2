<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmail extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/customers/email', $args, $client);
    }

    public function confirm(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm($args, $this->getClient());
    }
}
