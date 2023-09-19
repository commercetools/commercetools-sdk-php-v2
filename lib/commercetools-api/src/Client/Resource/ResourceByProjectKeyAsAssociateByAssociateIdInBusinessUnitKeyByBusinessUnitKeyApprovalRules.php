<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ApprovalRule\ApprovalRuleDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRules extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/approval-rules', $args, $client);
    }

    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesByID($args, $this->getClient());
    }
    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesKeyByKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?ApprovalRuleDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ApprovalRuleDraft $body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesPost($args['projectKey'], $args['associateId'], $args['businessUnitKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyApprovalRulesGet($args['projectKey'], $args['associateId'], $args['businessUnitKey'], $body, $headers, $this->getClient());
    }
}
