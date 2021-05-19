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
use Commercetools\History\Models\Common\DiscountCodeInfo;
use Commercetools\History\Models\Common\DiscountCodeInfoBuilder;

/**
 * @implements Builder<AddDiscountCodeChange>
 */
final class AddDiscountCodeChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|DiscountCodeInfo|DiscountCodeInfoBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>addDiscountCode</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|DiscountCodeInfo
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountCodeInfoBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?DiscountCodeInfo $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountCodeInfo $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DiscountCodeInfoBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddDiscountCodeChange
    {
        return new AddDiscountCodeChangeModel(
            $this->change,
            $this->nextValue instanceof DiscountCodeInfoBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddDiscountCodeChangeBuilder
    {
        return new self();
    }
}
