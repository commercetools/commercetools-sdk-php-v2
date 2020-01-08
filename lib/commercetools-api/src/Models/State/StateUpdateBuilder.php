<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StateUpdate>
 */
final class StateUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?StateUpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|StateUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?StateUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): StateUpdate
    {
        return new StateUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): StateUpdateBuilder
    {
        return new self();
    }
}
