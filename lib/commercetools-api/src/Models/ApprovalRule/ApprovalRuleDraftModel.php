<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApprovalRuleDraftModel extends JsonObjectModel implements ApprovalRuleDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $description;

    /**
     *
     * @var ?string
     */
    protected $status;

    /**
     *
     * @var ?string
     */
    protected $predicate;

    /**
     *
     * @var ?ApproverHierarchyDraft
     */
    protected $approvers;

    /**
     *
     * @var ?RuleRequesterDraftCollection
     */
    protected $requesters;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $name = null,
        ?string $description = null,
        ?string $status = null,
        ?string $predicate = null,
        ?ApproverHierarchyDraft $approvers = null,
        ?RuleRequesterDraftCollection $requesters = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->predicate = $predicate;
        $this->approvers = $approvers;
        $this->requesters = $requesters;
    }

    /**
     * <p>User-defined unique identifier of the Approval Rule. Uniqueness is enforced within the Business Unit.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Name of the Approval Rule.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Description of the Approval Rule.</p>
     *
     *
     * @return null|string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (string) $data;
        }

        return $this->description;
    }

    /**
     * <p>Indicates whether the Approval Rule should be matched against <a href="ctp:api:type:Order">Orders</a> or not.</p>
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
     * <p>The <a href="/../api/predicates/predicate-operators">predicate</a> describing the <a href="ctp:api:type:Order">Orders</a> the Approval Rule should match against.</p>
     *
     *
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * <p>The hierarchy of approvers within the Approval Rule.</p>
     *
     *
     * @return null|ApproverHierarchyDraft
     */
    public function getApprovers()
    {
        if (is_null($this->approvers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_APPROVERS);
            if (is_null($data)) {
                return null;
            }

            $this->approvers = ApproverHierarchyDraftModel::of($data);
        }

        return $this->approvers;
    }

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">Associate Roles</a> customers must hold for their Order to require approval.</p>
     *
     *
     * @return null|RuleRequesterDraftCollection
     */
    public function getRequesters()
    {
        if (is_null($this->requesters)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REQUESTERS);
            if (is_null($data)) {
                return null;
            }
            $this->requesters = RuleRequesterDraftCollection::fromArray($data);
        }

        return $this->requesters;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }

    /**
     * @param ?ApproverHierarchyDraft $approvers
     */
    public function setApprovers(?ApproverHierarchyDraft $approvers): void
    {
        $this->approvers = $approvers;
    }

    /**
     * @param ?RuleRequesterDraftCollection $requesters
     */
    public function setRequesters(?RuleRequesterDraftCollection $requesters): void
    {
        $this->requesters = $requesters;
    }
}
