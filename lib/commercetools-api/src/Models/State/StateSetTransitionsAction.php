<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateSetTransitionsAction extends StateUpdateAction
{
    public const FIELD_TRANSITIONS = 'transitions';

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions();

    /**
     * @param ?StateResourceIdentifierCollection $transitions
     */
    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}
