<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StateUpdateAction>
 */
final class StateUpdateActionBuilder implements Builder
{
    public function build(): StateUpdateAction
    {
        return new StateUpdateActionModel(
        );
    }

    public static function of(): StateUpdateActionBuilder
    {
        return new self();
    }
}
