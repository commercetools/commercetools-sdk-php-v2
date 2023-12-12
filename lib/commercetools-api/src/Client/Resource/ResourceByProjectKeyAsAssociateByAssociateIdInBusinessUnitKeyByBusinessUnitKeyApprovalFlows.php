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
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlows extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/approval-flows', $args, $client);
    }

    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsGet($args['projectKey'], $args['associateId'], $args['businessUnitKey'], $body, $headers, $this->getClient());
    }
}
