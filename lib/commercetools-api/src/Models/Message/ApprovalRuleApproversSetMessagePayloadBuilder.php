<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ApprovalRule\ApproverHierarchy;
use Commercetools\Api\Models\ApprovalRule\ApproverHierarchyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalRuleApproversSetMessagePayload>
 */
final class ApprovalRuleApproversSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ApproverHierarchy|ApproverHierarchyBuilder
     */
    private $approvers;

    /**

     * @var null|ApproverHierarchy|ApproverHierarchyBuilder
     */
    private $oldApprovers;

    /**
     * <p>Approver hierarchy of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> after the <a href="ctp:api:type:ApprovalRuleSetApproversAction">Set Approvers</a> update action.</p>
     *

     * @return null|ApproverHierarchy
     */
    public function getApprovers()
    {
        return $this->approvers instanceof ApproverHierarchyBuilder ? $this->approvers->build() : $this->approvers;
    }

    /**
     * <p>Approver hierarchy of the <a href="ctp:api:type:ApprovalRule">ApprovalRule</a> before the <a href="ctp:api:type:ApprovalRuleSetApproversAction">Set Approvers</a> update action.</p>
     *

     * @return null|ApproverHierarchy
     */
    public function getOldApprovers()
    {
        return $this->oldApprovers instanceof ApproverHierarchyBuilder ? $this->oldApprovers->build() : $this->oldApprovers;
    }

    /**
     * @param ?ApproverHierarchy $approvers
     * @return $this
     */
    public function withApprovers(?ApproverHierarchy $approvers)
    {
        $this->approvers = $approvers;

        return $this;
    }

    /**
     * @param ?ApproverHierarchy $oldApprovers
     * @return $this
     */
    public function withOldApprovers(?ApproverHierarchy $oldApprovers)
    {
        $this->oldApprovers = $oldApprovers;

        return $this;
    }

    /**
     * @deprecated use withApprovers() instead
     * @return $this
     */
    public function withApproversBuilder(?ApproverHierarchyBuilder $approvers)
    {
        $this->approvers = $approvers;

        return $this;
    }

    /**
     * @deprecated use withOldApprovers() instead
     * @return $this
     */
    public function withOldApproversBuilder(?ApproverHierarchyBuilder $oldApprovers)
    {
        $this->oldApprovers = $oldApprovers;

        return $this;
    }

    public function build(): ApprovalRuleApproversSetMessagePayload
    {
        return new ApprovalRuleApproversSetMessagePayloadModel(
            $this->approvers instanceof ApproverHierarchyBuilder ? $this->approvers->build() : $this->approvers,
            $this->oldApprovers instanceof ApproverHierarchyBuilder ? $this->oldApprovers->build() : $this->oldApprovers
        );
    }

    public static function of(): ApprovalRuleApproversSetMessagePayloadBuilder
    {
        return new self();
    }
}
