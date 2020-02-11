<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
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
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>A unique identifier for the state.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>A human-readable name of the state.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>A human-readable description of the state.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>A state can be declared as an initial state for any state machine.
     * When a workflow starts, this first state must be an <code>initial</code> state.</p>
     *
     * @return null|bool
     */
    public function getInitial();

    /**
     * <p>Builtin states are integral parts of the project that cannot be deleted nor the key can be changed.</p>
     *
     * @return null|bool
     */
    public function getBuiltIn();

    /**
     * @return null|array
     */
    public function getRoles();

    /**
     * <p>Transitions are a way to describe possible transformations of the current state to other states of the same <code>type</code> (e.g.: <em>Initial</em> -&gt; <em>Shipped</em>).
     * When performing a <code>transitionState</code> update action and <code>transitions</code> is set, the currently referenced state must have a transition to the new state.
     * If <code>transitions</code> is an empty list, it means the current state is a final state and no further transitions are allowed.
     * If <code>transitions</code> is not set, the validation is turned off.
     * When performing a <code>transitionState</code> update action, any other state of the same <code>type</code> can be transitioned to.</p>
     *
     * @return null|StateReferenceCollection
     */
    public function getTransitions();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setType(?string $type): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setInitial(?bool $initial): void;

    public function setBuiltIn(?bool $builtIn): void;

    public function setRoles(?array $roles): void;

    public function setTransitions(?StateReferenceCollection $transitions): void;
}
