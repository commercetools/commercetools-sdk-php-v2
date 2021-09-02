<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InvalidStateTransitionError extends ErrorObject
{
    public const FIELD_CURRENT_STATE = 'currentState';
    public const FIELD_NEW_STATE = 'newState';

    /**
     * <p>Represents the status of a resource under an import process. Every resource has the initial state <code>processing</code>.</p>
     *
     * @return null|string
     */
    public function getCurrentState();

    /**
     * <p>Represents the status of a resource under an import process. Every resource has the initial state <code>processing</code>.</p>
     *
     * @return null|string
     */
    public function getNewState();

    /**
     * @param ?string $currentState
     */
    public function setCurrentState(?string $currentState): void;

    /**
     * @param ?string $newState
     */
    public function setNewState(?string $newState): void;
}
