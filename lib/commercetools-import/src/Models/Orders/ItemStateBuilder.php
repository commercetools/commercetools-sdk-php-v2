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

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|StateKeyReference|StateKeyReferenceBuilder
     */
    private $state;

    /**
     * <p>Number of Line Items or Custom Line Items in this State.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>State of the Line Items or Custom Line Items in a custom workflow. If the referenced <a href="ctp:api:type:State">State</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced State is created.</p>
     *

     * @return null|StateKeyReference
     */
    public function getState()
    {
        return $this->state instanceof StateKeyReferenceBuilder ? $this->state->build() : $this->state;
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
     * @param ?StateKeyReference $state
     * @return $this
     */
    public function withState(?StateKeyReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withState() instead
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
