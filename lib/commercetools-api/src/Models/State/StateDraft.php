<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_TYPE = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_INITIAL = 'initial';
    public const FIELD_ROLES = 'roles';
    public const FIELD_TRANSITIONS = 'transitions';

    /**
     * <p>User-defined unique identifier for the State.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>Specify to which resource or object type the State is assigned to.</p>
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
     * <p>Set to <code>false</code> if the State is not the first step in a workflow.</p>
     *
     * @return null|bool
     */
    public function getInitial();

    /**
     * <p>If suitable, assign predifined roles the State can fulfill in case the State's <code>type</code> is <code>LineItemState</code> or <code>ReviewState</code>.</p>
     *
     * @return null|array
     */
    public function getRoles();

    /**
     * <p>Define the list of States of the same <code>type</code> to which the current State can be transitioned to.</p>
     * <ul>
     * <li>If, for example, the current State is the <em>Initial</em> State of <a href="ctp:api:type:StateTypeEnum">StateType</a> <code>OrderState</code> and you want to allow the transition <em>Initial</em> -&gt; <em>Shipped</em>, then add the <a href="ctp:api:type:StateResourceIdentifier">StateResourceIdentifier</a> to the <em>Shipped</em> <code>OrderState</code> to this list.</li>
     * <li>Set to empty list for not allowing any transition from the current State and defining it as final State for a workflow.</li>
     * <li>Do not set this field at all to turn off validation and allowing transitions to any other State of the same <code>type</code> as the current State.</li>
     * </ul>
     *
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions();

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
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?StateResourceIdentifierCollection $transitions
     */
    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}
