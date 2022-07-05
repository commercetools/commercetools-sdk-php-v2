<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PriceTier>
 */
final class PriceTierBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $minimumQuantity;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $value;

    /**
     * <p>The minimum quantity this price tier is valid for.</p>
     *

     * @return null|int
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * <p>The currency of a price tier is always the same as the currency of the base Price.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?int $minimumQuantity
     * @return $this
     */
    public function withMinimumQuantity(?int $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @param ?TypedMoney $value
     * @return $this
     */
    public function withValue(?TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?TypedMoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): PriceTier
    {
        return new PriceTierModel(
            $this->minimumQuantity,
            $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): PriceTierBuilder
    {
        return new self();
    }
}
