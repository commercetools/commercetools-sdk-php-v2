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
 * @implements Builder<AddShippingChange>
 */
final class AddShippingChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Shipping|ShippingBuilder
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
     * <p>Value after the change.</p>
     *

     * @return null|Shipping
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShippingBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?Shipping $nextValue
     * @return $this
     */
    public function withNextValue(?Shipping $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ShippingBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddShippingChange
    {
        return new AddShippingChangeModel(
            $this->change,
            $this->nextValue instanceof ShippingBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddShippingChangeBuilder
    {
        return new self();
    }
}
