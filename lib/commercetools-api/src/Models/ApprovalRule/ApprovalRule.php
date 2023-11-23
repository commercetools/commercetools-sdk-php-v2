<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ApprovalRule extends BaseResource
{
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_STATUS = 'status';
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_APPROVERS = 'approvers';
    public const FIELD_REQUESTERS = 'requesters';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';

    /**
     * <p>Unique identifier of the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Approval Rule.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Approval Rule was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Date and time (UTC) the Approval Rule was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>User-defined unique identifier of the Approval Rule. Must be unique within a <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
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
     * <p>The <a href="/../api/projects/predicates#order-predicates">Order Predicate</a> describing the <a href="ctp:api:type:Order">Orders</a> the Approval Rule should match against.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>The hierarchy of approvers within the Approval Rule.</p>
     *

     * @return null|ApproverHierarchy
     */
    public function getApprovers();

    /**
     * <p>The <a href="ctp:api:type:AssociateRole">Associate Roles</a> customers must hold for their Order to require approval.</p>
     *

     * @return null|RuleRequesterCollection
     */
    public function getRequesters();

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">Business Unit</a> the Approval Rule belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

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
     * @param ?ApproverHierarchy $approvers
     */
    public function setApprovers(?ApproverHierarchy $approvers): void;

    /**
     * @param ?RuleRequesterCollection $requesters
     */
    public function setRequesters(?RuleRequesterCollection $requesters): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;
}
