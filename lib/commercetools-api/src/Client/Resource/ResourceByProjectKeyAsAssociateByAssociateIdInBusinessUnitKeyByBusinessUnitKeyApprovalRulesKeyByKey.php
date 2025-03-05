<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ApprovalRule\ApprovalRuleUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/approval-rules/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesKeyByKeyGet($args['projectKey'], $args['associateId'], $args['businessUnitKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?ApprovalRuleUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ApprovalRuleUpdate $body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesKeyByKeyPost($args['projectKey'], $args['associateId'], $args['businessUnitKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
