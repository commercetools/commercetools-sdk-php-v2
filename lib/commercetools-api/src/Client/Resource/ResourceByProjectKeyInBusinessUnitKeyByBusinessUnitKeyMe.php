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
class ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMe extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-business-unit/key={businessUnitKey}/me', $args, $client);
    }

    /**
     */
    public function customers(): ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMeCustomers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMeCustomers($args, $this->getClient());
    }
}
