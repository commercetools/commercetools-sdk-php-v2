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
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ApprovalFlow extends BaseResource
{
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_ORDER = 'order';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_RULES = 'rules';
    public const FIELD_STATUS = 'status';
    public const FIELD_REJECTION = 'rejection';
    public const FIELD_APPROVALS = 'approvals';
    public const FIELD_ELIGIBLE_APPROVERS = 'eligibleApprovers';
    public const FIELD_PENDING_APPROVERS = 'pendingApprovers';
    public const FIELD_CURRENT_TIER_PENDING_APPROVERS = 'currentTierPendingApprovers';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique identifier of the Approval Flow.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Approval Flow.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Approval Flow was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>IDs and references that created the ApprovalFlow.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Date and time (UTC) the Approval Flow was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the ApprovalFlow.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p><a href="ctp:api:type:Order">Order</a> that needs to be approved.</p>
     *

     * @return null|OrderReference
     */
    public function getOrder();

    /**
     * <p><a href="ctp:api:type:BusinessUnit">Business Unit</a> the Approval Flow belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**
     * <p>Approval Rules that matched the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|ApprovalRuleCollection
     */
    public function getRules();

    /**
     * <p>Indicates whether the Approval Flow is under review, approved, or rejected.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>Present when the <a href="ctp:api:type:ApprovalFlowStatus">status</a> of the Approval Flow is <code>Rejected</code>.</p>
     *

     * @return null|ApprovalFlowRejection
     */
    public function getRejection();

    /**
     * <p>Existing approvals in the Approval Flow.</p>
     *

     * @return null|ApprovalFlowApprovalCollection
     */
    public function getApprovals();

    /**
     * <p>Associate Roles that can approve according to the approver hierarchy tiers defined in <code>rules</code>.
     * Associates are allowed to reject even after they have given approval, as long as the current approver hierarchy tier still contains their role.</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getEligibleApprovers();

    /**
     * <p>Associate Roles required for approval based on the approver hierarchy tiers defined in <code>rules</code> across all remaining tiers.</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getPendingApprovers();

    /**
     * <p>Associate Roles required for approval based on the approver hierarchy tiers defined in <code>rules</code> only for the currently active tier(s).</p>
     *

     * @return null|RuleApproverCollection
     */
    public function getCurrentTierPendingApprovers();

    /**
     * <p>Custom Fields on the Approval Flow.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;

    /**
     * @param ?ApprovalRuleCollection $rules
     */
    public function setRules(?ApprovalRuleCollection $rules): void;

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?ApprovalFlowRejection $rejection
     */
    public function setRejection(?ApprovalFlowRejection $rejection): void;

    /**
     * @param ?ApprovalFlowApprovalCollection $approvals
     */
    public function setApprovals(?ApprovalFlowApprovalCollection $approvals): void;

    /**
     * @param ?RuleApproverCollection $eligibleApprovers
     */
    public function setEligibleApprovers(?RuleApproverCollection $eligibleApprovers): void;

    /**
     * @param ?RuleApproverCollection $pendingApprovers
     */
    public function setPendingApprovers(?RuleApproverCollection $pendingApprovers): void;

    /**
     * @param ?RuleApproverCollection $currentTierPendingApprovers
     */
    public function setCurrentTierPendingApprovers(?RuleApproverCollection $currentTierPendingApprovers): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
