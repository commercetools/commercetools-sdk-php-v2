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
class ResourceByProjectKeyAsAssociateByAssociateId extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}', $args, $client);
    }

    /**
     */
    public function businessUnits(): ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnits
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnits($args, $this->getClient());
    }
    /**
     */
    public function inBusinessUnitKeyWithBusinessUnitKeyValue(string $businessUnitKey = null): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKey
    {
        $args = $this->getArgs();
        if (!is_null($businessUnitKey)) {
            $args['businessUnitKey'] = $businessUnitKey;
        }

        return new ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKey($args, $this->getClient());
    }
}
