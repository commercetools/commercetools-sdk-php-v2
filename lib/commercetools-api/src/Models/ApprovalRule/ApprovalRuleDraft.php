<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApprovalRuleDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_STATUS = 'status';
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_APPROVERS = 'approvers';
    public const FIELD_REQUESTERS = 'requesters';

    /**
     * <p>User-defined unique identifier of the Approval Rule. Uniqueness is enforced within the Business Unit.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Description of the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Indicates whether the Approval Rule should be matched against <a href="ctp:api:type:Order">Orders</a> or not.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>The <a href="/../api/predicates/predicate-operators">predicate</a> describing the <a href="ctp:api:type:Order">Orders</a> the Approval Rule should match against.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>The hierarchy of approvers within the Approval Rule.</p>
     *

     * @return null|ApproverHierarchyDraft
     */
    public function getApprovers();

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">Associate Roles</a> customers must hold for their Order to require approval.</p>
     *

     * @return null|RuleRequesterDraftCollection
     */
    public function getRequesters();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;

    /**
     * @param ?ApproverHierarchyDraft $approvers
     */
    public function setApprovers(?ApproverHierarchyDraft $approvers): void;

    /**
     * @param ?RuleRequesterDraftCollection $requesters
     */
    public function setRequesters(?RuleRequesterDraftCollection $requesters): void;
}
