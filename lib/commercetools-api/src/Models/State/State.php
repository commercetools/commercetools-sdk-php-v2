<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface State extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_INITIAL = 'initial';
    public const FIELD_BUILT_IN = 'builtIn';
    public const FIELD_ROLES = 'roles';
    public const FIELD_TRANSITIONS = 'transitions';

    /**
     * <p>Unique ID of the State.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the State.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the State was initially created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the State was last updated.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier for the State.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Indicates to which resource or object types the State is assigned to.</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * <p>Name of the State.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the State.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p><code>true</code> for an initial State, the first State in a workflow.</p>
     *
     * @return null|bool
     */
    public function getInitial();

    /**
     * <p><code>true</code> for States that are an integral part of the <a href="ctp:api:type:Project">Project</a>. Those States cannot be deleted and their <code>key</code> cannot be changed.</p>
     *
     * @return null|bool
     */
    public function getBuiltIn();

    /**
     * <p>Roles the State can fulfill for <a href="ctp:api:type:Review">Reviews</a> and <a href="ctp:api:type:LineItem">Line Items</a>.</p>
     *
     * @return null|array
     */
    public function getRoles();

    /**
     * <ul>
     * <li>list of States of the same <code>type</code> that the current State can be transitioned to. For example, when the current State is the <em>Initial</em> State of <a href="ctp:api:type:StateTypeEnum">StateType</a> <code>OrderState</code> and this list contains the reference to the <em>Shipped</em> <code>OrderState</code>, the transition <em>Initial</em> -&gt; <em>Shipped</em> is allowed.</li>
     * <li>if empty, no transitions are allowed from the current State, defining the current State as final for this workflow.</li>
     * <li>if not set, the validation is turned off and the current State can be transitioned to any other State of the same <code>type</code> as the current State.</li>
     * </ul>
     *
     * @return null|StateReferenceCollection
     */
    public function getTransitions();

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
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?bool $initial
     */
    public function setInitial(?bool $initial): void;

    /**
     * @param ?bool $builtIn
     */
    public function setBuiltIn(?bool $builtIn): void;

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?StateReferenceCollection $transitions
     */
    public function setTransitions(?StateReferenceCollection $transitions): void;
}
