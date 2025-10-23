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
use Commercetools\History\Models\Common\Shipping;
use Commercetools\History\Models\Common\ShippingBuilder;

/**
 * @implements Builder<RemoveShippingChange>
 */
final class RemoveShippingChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Shipping|ShippingBuilder
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
     * <p>Value before the change.</p>
     *

     * @return null|Shipping
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShippingBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?Shipping $previousValue
     * @return $this
     */
    public function withPreviousValue(?Shipping $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ShippingBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveShippingChange
    {
        return new RemoveShippingChangeModel(
            $this->change,
            $this->previousValue instanceof ShippingBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveShippingChangeBuilder
    {
        return new self();
    }
}
