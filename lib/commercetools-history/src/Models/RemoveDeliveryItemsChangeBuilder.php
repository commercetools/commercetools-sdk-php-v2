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
 * @implements Builder<RemoveDeliveryItemsChange>
 */
final class RemoveDeliveryItemsChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|Delivery|DeliveryBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeDelivery</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|Delivery
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DeliveryBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?Delivery $previousValue
     * @return $this
     */
    public function withPreviousValue(?Delivery $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?DeliveryBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveDeliveryItemsChange
    {
        return new RemoveDeliveryItemsChangeModel(
            $this->change,
            $this->previousValue instanceof DeliveryBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveDeliveryItemsChangeBuilder
    {
        return new self();
    }
}
