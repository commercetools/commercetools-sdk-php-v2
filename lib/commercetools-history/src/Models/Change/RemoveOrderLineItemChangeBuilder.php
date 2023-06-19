<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\LineItem;
use Commercetools\History\Models\Common\LineItemBuilder;

/**
 * @implements Builder<RemoveOrderLineItemChange>
 */
final class RemoveOrderLineItemChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|LineItem|LineItemBuilder
     */
    private $previousValue;

    /**

     * @var null|LineItem|LineItemBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|LineItem
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LineItemBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|LineItem
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LineItemBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?LineItem $previousValue
     * @return $this
     */
    public function withPreviousValue(?LineItem $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?LineItem $nextValue
     * @return $this
     */
    public function withNextValue(?LineItem $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?LineItemBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?LineItemBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): RemoveOrderLineItemChange
    {
        return new RemoveOrderLineItemChangeModel(
            $this->change,
            $this->previousValue instanceof LineItemBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof LineItemBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): RemoveOrderLineItemChangeBuilder
    {
        return new self();
    }
}
