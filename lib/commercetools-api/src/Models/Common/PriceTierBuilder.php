<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PriceTier>
 */
final class PriceTierBuilder implements Builder
{
    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $value;

    /**
     * @var ?int
     */
    private $minimumQuantity;

    /**
     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return null|int
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * @return $this
     */
    public function withValue(?TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMinimumQuantity(?int $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
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
            ($this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value),
            $this->minimumQuantity
        );
    }

    public static function of(): PriceTierBuilder
    {
        return new self();
    }
}
