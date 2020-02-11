<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface StateSetTransitionsAction extends StateUpdateAction
{

    public const FIELD_TRANSITIONS = 'transitions';

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions();

    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}
