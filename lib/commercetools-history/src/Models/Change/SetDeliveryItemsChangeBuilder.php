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
use Commercetools\History\Models\Common\DeliveryItemCollection;

/**
 * @implements Builder<SetDeliveryItemsChange>
 */
final class SetDeliveryItemsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?DeliveryItemCollection
     */
    private $previousValue;

    /**

     * @var ?DeliveryItemCollection
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $deliveryId;

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

     * @return null|DeliveryItemCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
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
     * @param ?DeliveryItemCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?DeliveryItemCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DeliveryItemCollection $nextValue
     * @return $this
     */
    public function withNextValue(?DeliveryItemCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $deliveryId
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }


    public function build(): SetDeliveryItemsChange
    {
        return new SetDeliveryItemsChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->deliveryId
        );
    }

    public static function of(): SetDeliveryItemsChangeBuilder
    {
        return new self();
    }
}
