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
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\OrderReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ApprovalFlowModel extends JsonObjectModel implements ApprovalFlow
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?OrderReference
     */
    protected $order;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $businessUnit;

    /**
     *
     * @var ?ApprovalRuleCollection
     */
    protected $rules;

    /**
     *
     * @var ?string
     */
    protected $status;

    /**
     *
     * @var ?ApprovalFlowRejection
     */
    protected $rejection;

    /**
     *
     * @var ?ApprovalFlowApprovalCollection
     */
    protected $approvals;

    /**
     *
     * @var ?RuleApproverCollection
     */
    protected $eligibleApprovers;

    /**
     *
     * @var ?RuleApproverCollection
     */
    protected $pendingApprovers;

    /**
     *
     * @var ?RuleApproverCollection
     */
    protected $currentTierPendingApprovers;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?CreatedBy $createdBy = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?OrderReference $order = null,
        ?BusinessUnitKeyReference $businessUnit = null,
        ?ApprovalRuleCollection $rules = null,
        ?string $status = null,
        ?ApprovalFlowRejection $rejection = null,
        ?ApprovalFlowApprovalCollection $approvals = null,
        ?RuleApproverCollection $eligibleApprovers = null,
        ?RuleApproverCollection $pendingApprovers = null,
        ?RuleApproverCollection $currentTierPendingApprovers = null,
        ?CustomFields $custom = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->order = $order;
        $this->businessUnit = $businessUnit;
        $this->rules = $rules;
        $this->status = $status;
        $this->rejection = $rejection;
        $this->approvals = $approvals;
        $this->eligibleApprovers = $eligibleApprovers;
        $this->pendingApprovers = $pendingApprovers;
        $this->currentTierPendingApprovers = $currentTierPendingApprovers;
        $this->custom = $custom;
    }

    /**
     * <p>Unique identifier of the Approval Flow.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the Approval Flow.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Approval Flow was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Approval Flow was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/general-concepts#events-tracked">events not tracked</a>.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/general-concepts#events-tracked">events not tracked</a>.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p><a href="ctp:api:type:Order">Order</a> that needs to be approved.</p>
     *
     *
     * @return null|OrderReference
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->order = OrderReferenceModel::of($data);
        }

        return $this->order;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnit">Business Unit</a> the Approval Flow belongs to.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p>Approval Rules that matched the <a href="ctp:api:type:Order">Order</a>.</p>
     *
     *
     * @return null|ApprovalRuleCollection
     */
    public function getRules()
    {
        if (is_null($this->rules)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RULES);
            if (is_null($data)) {
                return null;
            }
            $this->rules = ApprovalRuleCollection::fromArray($data);
        }

        return $this->rules;
    }

    /**
     * <p>Indicates whether the Approval Flow is under review, approved, or rejected.</p>
     *
     *
     * @return null|string
     */
    public function getStatus()
    {
        if (is_null($this->status)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATUS);
            if (is_null($data)) {
                return null;
            }
            $this->status = (string) $data;
        }

        return $this->status;
    }

    /**
     * <p>Present when the <a href="ctp:api:type:ApprovalFlowStatus">status</a> of the Approval Flow is <code>Rejected</code>.</p>
     *
     *
     * @return null|ApprovalFlowRejection
     */
    public function getRejection()
    {
        if (is_null($this->rejection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REJECTION);
            if (is_null($data)) {
                return null;
            }

            $this->rejection = ApprovalFlowRejectionModel::of($data);
        }

        return $this->rejection;
    }

    /**
     * <p>Existing approvals in the Approval Flow.</p>
     *
     *
     * @return null|ApprovalFlowApprovalCollection
     */
    public function getApprovals()
    {
        if (is_null($this->approvals)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_APPROVALS);
            if (is_null($data)) {
                return null;
            }
            $this->approvals = ApprovalFlowApprovalCollection::fromArray($data);
        }

        return $this->approvals;
    }

    /**
     * <p>Associate Roles that can approve according to the approver hierarchy tiers defined in <code>rules</code>.
     * Associates are allowed to reject even after they have given approval, as long as the current approver hierarchy tier still contains their role.</p>
     *
     *
     * @return null|RuleApproverCollection
     */
    public function getEligibleApprovers()
    {
        if (is_null($this->eligibleApprovers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ELIGIBLE_APPROVERS);
            if (is_null($data)) {
                return null;
            }
            $this->eligibleApprovers = RuleApproverCollection::fromArray($data);
        }

        return $this->eligibleApprovers;
    }

    /**
     * <p>Associate Roles required for approval based on the approver hierarchy tiers defined in <code>rules</code> across all remaining tiers.</p>
     *
     *
     * @return null|RuleApproverCollection
     */
    public function getPendingApprovers()
    {
        if (is_null($this->pendingApprovers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PENDING_APPROVERS);
            if (is_null($data)) {
                return null;
            }
            $this->pendingApprovers = RuleApproverCollection::fromArray($data);
        }

        return $this->pendingApprovers;
    }

    /**
     * <p>Associate Roles required for approval based on the approver hierarchy tiers defined in <code>rules</code> only for the currently active tier(s).</p>
     *
     *
     * @return null|RuleApproverCollection
     */
    public function getCurrentTierPendingApprovers()
    {
        if (is_null($this->currentTierPendingApprovers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CURRENT_TIER_PENDING_APPROVERS);
            if (is_null($data)) {
                return null;
            }
            $this->currentTierPendingApprovers = RuleApproverCollection::fromArray($data);
        }

        return $this->currentTierPendingApprovers;
    }

    /**
     * <p>Custom Fields on the Approval Flow.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?OrderReference $order
     */
    public function setOrder(?OrderReference $order): void
    {
        $this->order = $order;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?ApprovalRuleCollection $rules
     */
    public function setRules(?ApprovalRuleCollection $rules): void
    {
        $this->rules = $rules;
    }

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param ?ApprovalFlowRejection $rejection
     */
    public function setRejection(?ApprovalFlowRejection $rejection): void
    {
        $this->rejection = $rejection;
    }

    /**
     * @param ?ApprovalFlowApprovalCollection $approvals
     */
    public function setApprovals(?ApprovalFlowApprovalCollection $approvals): void
    {
        $this->approvals = $approvals;
    }

    /**
     * @param ?RuleApproverCollection $eligibleApprovers
     */
    public function setEligibleApprovers(?RuleApproverCollection $eligibleApprovers): void
    {
        $this->eligibleApprovers = $eligibleApprovers;
    }

    /**
     * @param ?RuleApproverCollection $pendingApprovers
     */
    public function setPendingApprovers(?RuleApproverCollection $pendingApprovers): void
    {
        $this->pendingApprovers = $pendingApprovers;
    }

    /**
     * @param ?RuleApproverCollection $currentTierPendingApprovers
     */
    public function setCurrentTierPendingApprovers(?RuleApproverCollection $currentTierPendingApprovers): void
    {
        $this->currentTierPendingApprovers = $currentTierPendingApprovers;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ApprovalFlow::FIELD_CREATED_AT]) && $data[ApprovalFlow::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ApprovalFlow::FIELD_CREATED_AT] = $data[ApprovalFlow::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ApprovalFlow::FIELD_LAST_MODIFIED_AT]) && $data[ApprovalFlow::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ApprovalFlow::FIELD_LAST_MODIFIED_AT] = $data[ApprovalFlow::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
