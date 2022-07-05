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
 * @implements Builder<RemoveDiscountCodeChange>
 */
final class RemoveDiscountCodeChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|DiscountCodeInfo|DiscountCodeInfoBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeDiscountCode</code></p>
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
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountCodeInfoBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?DiscountCodeInfo $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountCodeInfo $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountCodeInfoBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveDiscountCodeChange
    {
        return new RemoveDiscountCodeChangeModel(
            $this->change,
            $this->previousValue instanceof DiscountCodeInfoBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveDiscountCodeChangeBuilder
    {
        return new self();
    }
}
