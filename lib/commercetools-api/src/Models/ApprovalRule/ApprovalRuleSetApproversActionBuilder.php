<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalRuleSetApproversAction>
 */
final class ApprovalRuleSetApproversActionBuilder implements Builder
{
    /**

     * @var null|ApproverHierarchyDraft|ApproverHierarchyDraftBuilder
     */
    private $approvers;

    /**
     * <p>New approvers to set for the Approval Rule.</p>
     *

     * @return null|ApproverHierarchyDraft
     */
    public function getApprovers()
    {
        return $this->approvers instanceof ApproverHierarchyDraftBuilder ? $this->approvers->build() : $this->approvers;
    }

    /**
     * @param ?ApproverHierarchyDraft $approvers
     * @return $this
     */
    public function withApprovers(?ApproverHierarchyDraft $approvers)
    {
        $this->approvers = $approvers;

        return $this;
    }

    /**
     * @deprecated use withApprovers() instead
     * @return $this
     */
    public function withApproversBuilder(?ApproverHierarchyDraftBuilder $approvers)
    {
        $this->approvers = $approvers;

        return $this;
    }

    public function build(): ApprovalRuleSetApproversAction
    {
        return new ApprovalRuleSetApproversActionModel(
            $this->approvers instanceof ApproverHierarchyDraftBuilder ? $this->approvers->build() : $this->approvers
        );
    }

    public static function of(): ApprovalRuleSetApproversActionBuilder
    {
        return new self();
    }
}
