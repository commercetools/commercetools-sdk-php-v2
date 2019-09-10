<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\JsonObject;

interface StateDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_INITIAL = 'initial';
    const FIELD_ROLES = 'roles';
    const FIELD_TRANSITIONS = 'transitions';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|bool
     */
    public function getInitial();

    /**
     * @return null|array
     */
    public function getRoles();

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions();

    public function setKey(?string $key): void;

    public function setType(?string $type): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setInitial(?bool $initial): void;

    public function setRoles(?array $roles): void;

    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}
