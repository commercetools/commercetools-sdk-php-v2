<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\StateKeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<ItemState>
 */
final class ItemStateBuilder implements Builder
{
    /**
     * @var ?float
     */
    private $quantity;

    /**
     * @var null|StateKeyReference|StateKeyReferenceBuilder
     */
    private $state;

    /**
     * @return null|float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>Maps to <code>ItemState.state</code>.</p>
     *
     * @return null|StateKeyReference
     */
    public function getState()
    {
        return $this->state instanceof StateKeyReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * @param ?float $quantity
     * @return $this
     */
    public function withQuantity(?float $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?StateKeyReference $state
     * @return $this
     */
    public function withState(?StateKeyReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStateBuilder(?StateKeyReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): ItemState
    {
        return new ItemStateModel(
            $this->quantity,
            $this->state instanceof StateKeyReferenceBuilder ? $this->state->build() : $this->state
        );
    }

    public static function of(): ItemStateBuilder
    {
        return new self();
    }
}
