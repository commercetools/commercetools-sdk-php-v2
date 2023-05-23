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
class ResourceByProjectKeyAsAssociate extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate', $args, $client);
    }

    /**
     */
    public function withAssociateIdValue(string $associateId = null): ResourceByProjectKeyAsAssociateByAssociateId
    {
        $args = $this->getArgs();
        if (!is_null($associateId)) {
            $args['associateId'] = $associateId;
        }

        return new ResourceByProjectKeyAsAssociateByAssociateId($args, $this->getClient());
    }
}
