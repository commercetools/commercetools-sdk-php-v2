<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Api\Models\ApprovalRule\ApprovalRuleCollection;
use Commercetools\Api\Models\ApprovalRule\RuleApproverCollection;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceBuilder;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ApprovalFlow>
 */
final class ApprovalFlowBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|OrderReference|OrderReferenceBuilder
     */
    private $order;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $businessUnit;

    /**

     * @var ?ApprovalRuleCollection
     */
    private $rules;

    /**

     * @var ?string
     */
    private $status;

    /**

     * @var null|ApprovalFlowRejection|ApprovalFlowRejectionBuilder
     */
    private $rejection;

    /**

     * @var ?ApprovalFlowApprovalCollection
     */
    private $approvals;

    /**

     * @var ?RuleApproverCollection
     */
    private $eligibleApprovers;

    /**

     * @var ?RuleApproverCollection
     */
    private $pendingApprovers;

    /**

     * @var ?RuleApproverCollection
     */
    private $currentTierPendingApprovers;

    /**
     * <p>Unique identifier of the Approval Flow.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Approval Flow.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Approval Flow was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Approval Flow was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p><a href="ctp:api:type:Order">Order</a> that needs to be approved.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder()
    {
        return $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnit">Business Unit</a> the Approval Flow belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p>Approval Rules that matched the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|ApprovalRuleCollection
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * <p>Indicates whether the Approval Flow is under review, approved, or rejected.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p>Present when the <a href="ctp:api:type:ApprovalFlowStatus">status</a> of the Approval Flow is <code>Rejected</code>.</p>
     *

     * @return null|ApprovalFlowRejection
     */
    public function getRejection()
    {
        return $this->rejection instanceof ApprovalFlowRejectionBuilder ? $this->rejection->build() : $this->rejection;
    }

    /**
     * <p>Existing approvals in the Approval Flow.</p>
     *

     * @return null|ApprovalFlowApprovalCollection
     */
    public function getApprovals()
    {
        return $this->approvals;
    }

    /**
     * <p>Associate Roles that can approve according to the approver hierarchy tiers defined in <code>rules</code>.
     * Associates are allowed to reject even after they have given approval, as long as the current approver hierarchy tier still contains their role.</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getEligibleApprovers()
    {
        return $this->eligibleApprovers;
    }

    /**
     * <p>Associate Roles required for approval based on the approver hierarchy tiers defined in <code>rules</code> across all remaining tiers.</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getPendingApprovers()
    {
        return $this->pendingApprovers;
    }

    /**
     * <p>Associate Roles required for approval based on the approver hierarchy tiers defined in <code>rules</code> only for the currently active tier(s).</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getCurrentTierPendingApprovers()
    {
        return $this->currentTierPendingApprovers;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?OrderReference $order
     * @return $this
     */
    public function withOrder(?OrderReference $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitKeyReference $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?ApprovalRuleCollection $rules
     * @return $this
     */
    public function withRules(?ApprovalRuleCollection $rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param ?ApprovalFlowRejection $rejection
     * @return $this
     */
    public function withRejection(?ApprovalFlowRejection $rejection)
    {
        $this->rejection = $rejection;

        return $this;
    }

    /**
     * @param ?ApprovalFlowApprovalCollection $approvals
     * @return $this
     */
    public function withApprovals(?ApprovalFlowApprovalCollection $approvals)
    {
        $this->approvals = $approvals;

        return $this;
    }

    /**
     * @param ?RuleApproverCollection $eligibleApprovers
     * @return $this
     */
    public function withEligibleApprovers(?RuleApproverCollection $eligibleApprovers)
    {
        $this->eligibleApprovers = $eligibleApprovers;

        return $this;
    }

    /**
     * @param ?RuleApproverCollection $pendingApprovers
     * @return $this
     */
    public function withPendingApprovers(?RuleApproverCollection $pendingApprovers)
    {
        $this->pendingApprovers = $pendingApprovers;

        return $this;
    }

    /**
     * @param ?RuleApproverCollection $currentTierPendingApprovers
     * @return $this
     */
    public function withCurrentTierPendingApprovers(?RuleApproverCollection $currentTierPendingApprovers)
    {
        $this->currentTierPendingApprovers = $currentTierPendingApprovers;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withOrder() instead
     * @return $this
     */
    public function withOrderBuilder(?OrderReferenceBuilder $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitKeyReferenceBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withRejection() instead
     * @return $this
     */
    public function withRejectionBuilder(?ApprovalFlowRejectionBuilder $rejection)
    {
        $this->rejection = $rejection;

        return $this;
    }

    public function build(): ApprovalFlow
    {
        return new ApprovalFlowModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->order instanceof OrderReferenceBuilder ? $this->order->build() : $this->order,
            $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->rules,
            $this->status,
            $this->rejection instanceof ApprovalFlowRejectionBuilder ? $this->rejection->build() : $this->rejection,
            $this->approvals,
            $this->eligibleApprovers,
            $this->pendingApprovers,
            $this->currentTierPendingApprovers
        );
    }

    public static function of(): ApprovalFlowBuilder
    {
        return new self();
    }
}
