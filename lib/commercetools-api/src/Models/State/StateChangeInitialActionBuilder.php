<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StateChangeInitialAction>
 */
final class StateChangeInitialActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $initial;

    /**
     * @return null|bool
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * @return $this
     */
    public function withInitial(?bool $initial)
    {
        $this->initial = $initial;

        return $this;
    }

    public function build(): StateChangeInitialAction
    {
        return new StateChangeInitialActionModel(
            $this->initial
        );
    }

    public static function of(): StateChangeInitialActionBuilder
    {
        return new self();
    }
}
