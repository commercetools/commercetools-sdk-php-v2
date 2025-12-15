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
use Commercetools\History\Models\Common\DiscountTypeCombination;
use Commercetools\History\Models\Common\DiscountTypeCombinationBuilder;

/**
 * @implements Builder<ChangeDiscountTypeCombinationChange>
 */
final class ChangeDiscountTypeCombinationChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|DiscountTypeCombination|DiscountTypeCombinationBuilder
     */
    private $previousValue;

    /**

     * @var null|DiscountTypeCombination|DiscountTypeCombinationBuilder
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

     * @return null|DiscountTypeCombination
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountTypeCombinationBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountTypeCombination
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountTypeCombinationBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?DiscountTypeCombination $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountTypeCombination $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DiscountTypeCombination $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountTypeCombination $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountTypeCombinationBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DiscountTypeCombinationBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangeDiscountTypeCombinationChange
    {
        return new ChangeDiscountTypeCombinationChangeModel(
            $this->change,
            $this->previousValue instanceof DiscountTypeCombinationBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof DiscountTypeCombinationBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ChangeDiscountTypeCombinationChangeBuilder
    {
        return new self();
    }
}
