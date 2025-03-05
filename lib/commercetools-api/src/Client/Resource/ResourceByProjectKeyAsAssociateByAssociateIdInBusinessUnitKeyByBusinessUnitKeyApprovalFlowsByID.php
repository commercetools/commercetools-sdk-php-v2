<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ApprovalFlow\ApprovalFlowUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/approval-flows/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsByIDGet($args['projectKey'], $args['associateId'], $args['businessUnitKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ApprovalFlowUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ApprovalFlowUpdate $body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalFlowsByIDPost($args['projectKey'], $args['associateId'], $args['businessUnitKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
