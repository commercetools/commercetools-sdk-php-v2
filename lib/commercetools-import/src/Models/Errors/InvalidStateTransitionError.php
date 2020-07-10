<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface InvalidStateTransitionError extends ErrorObject
{

    public const FIELD_CURRENT_STATE = 'currentState';
    public const FIELD_NEW_STATE = 'newState';

    /**
     * <p>This enumeration describes the processing state of an import operation.</p>
     *
     * @return null|string
     */
    public function getCurrentState();

    /**
     * <p>This enumeration describes the processing state of an import operation.</p>
     *
     * @return null|string
     */
    public function getNewState();

    public function setCurrentState(?string $currentState): void;

    public function setNewState(?string $newState): void;
}
