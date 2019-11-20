<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StateChangeTypeAction>
 */
final class StateChangeTypeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): StateChangeTypeAction
    {
        return new StateChangeTypeActionModel(
            $this->type
        );
    }

    public static function of(): StateChangeTypeActionBuilder
    {
        return new self();
    }
}
