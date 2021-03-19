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
 * @implements Builder<ChangeQuantityChange>
 */
final class ChangeQuantityChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|InventoryQuantityValue|InventoryQuantityValueBuilder
     */
    private $nextValue;

    /**
     * @var null|InventoryQuantityValue|InventoryQuantityValueBuilder
     */
    private $previousValue;

    /**
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|InventoryQuantityValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof InventoryQuantityValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|InventoryQuantityValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof InventoryQuantityValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?InventoryQuantityValue $nextValue
     * @return $this
     */
    public function withNextValue(?InventoryQuantityValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?InventoryQuantityValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?InventoryQuantityValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?InventoryQuantityValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?InventoryQuantityValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ChangeQuantityChange
    {
        return new ChangeQuantityChangeModel(
            $this->change,
            $this->nextValue instanceof InventoryQuantityValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof InventoryQuantityValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeQuantityChangeBuilder
    {
        return new self();
    }
}
