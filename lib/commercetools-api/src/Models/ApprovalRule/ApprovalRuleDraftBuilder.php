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
 * @implements Builder<ApprovalRuleDraft>
 */
final class ApprovalRuleDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $description;

    /**

     * @var ?string
     */
    private $status;

    /**

     * @var ?string
     */
    private $predicate;

    /**

     * @var null|ApproverHierarchyDraft|ApproverHierarchyDraftBuilder
     */
    private $approvers;

    /**

     * @var ?RuleRequesterDraftCollection
     */
    private $requesters;

    /**
     * <p>User-defined unique identifier of the Approval Rule. Uniqueness is enforced within the Business Unit.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Description of the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Indicates whether the Approval Rule should be matched against <a href="ctp:api:type:Order">Orders</a> or not.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p>The <a href="/../api/predicates/predicate-operators">predicate</a> describing the <a href="ctp:api:type:Order">Orders</a> the Approval Rule should match against.</p>
     *

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <p>The hierarchy of approvers within the Approval Rule.</p>
     *

     * @return null|ApproverHierarchyDraft
     */
    public function getApprovers()
    {
        return $this->approvers instanceof ApproverHierarchyDraftBuilder ? $this->approvers->build() : $this->approvers;
    }

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">Associate Roles</a> customers must hold for their Order to require approval.</p>
     *

     * @return null|RuleRequesterDraftCollection
     */
    public function getRequesters()
    {
        return $this->requesters;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

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
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
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
     * @param ?RuleRequesterDraftCollection $requesters
     * @return $this
     */
    public function withRequesters(?RuleRequesterDraftCollection $requesters)
    {
        $this->requesters = $requesters;

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

    public function build(): ApprovalRuleDraft
    {
        return new ApprovalRuleDraftModel(
            $this->key,
            $this->name,
            $this->description,
            $this->status,
            $this->predicate,
            $this->approvers instanceof ApproverHierarchyDraftBuilder ? $this->approvers->build() : $this->approvers,
            $this->requesters
        );
    }

    public static function of(): ApprovalRuleDraftBuilder
    {
        return new self();
    }
}
