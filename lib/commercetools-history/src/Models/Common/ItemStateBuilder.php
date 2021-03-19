<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ItemState>
 */
final class ItemStateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $state;

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|Reference
     */
    public function getState()
    {
        return $this->state instanceof ReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?Reference $state
     * @return $this
     */
    public function withState(?Reference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStateBuilder(?ReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): ItemState
    {
        return new ItemStateModel(
            $this->quantity,
            $this->state instanceof ReferenceBuilder ? $this->state->build() : $this->state
        );
    }

    public static function of(): ItemStateBuilder
    {
        return new self();
    }
}
