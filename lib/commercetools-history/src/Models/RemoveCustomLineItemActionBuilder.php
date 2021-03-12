<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RemoveCustomLineItemAction>
 */
final class RemoveCustomLineItemActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|CustomLineItem|CustomLineItemBuilder
     */
    private $nextValue;

    /**
     * @var null|CustomLineItem|CustomLineItemBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for adding and removing custom line items</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|CustomLineItem
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomLineItemBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|CustomLineItem
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CustomLineItemBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?CustomLineItem $nextValue
     * @return $this
     */
    public function withNextValue(?CustomLineItem $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?CustomLineItem $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomLineItem $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?CustomLineItemBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?CustomLineItemBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveCustomLineItemAction
    {
        return new RemoveCustomLineItemActionModel(
            $this->change,
            $this->nextValue instanceof CustomLineItemBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof CustomLineItemBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveCustomLineItemActionBuilder
    {
        return new self();
    }
}
