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
     * <p>Every <a href="/import-operation">Import Operation</a> is assigned with one of the following states.</p>
     *

     * @return null|string
     */
    public function getCurrentState();

    /**
     * <p>Every <a href="/import-operation">Import Operation</a> is assigned with one of the following states.</p>
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
