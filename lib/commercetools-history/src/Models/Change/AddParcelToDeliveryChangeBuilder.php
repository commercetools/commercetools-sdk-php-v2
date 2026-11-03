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
use Commercetools\History\Models\Common\Parcel;
use Commercetools\History\Models\Common\ParcelBuilder;

/**
 * @implements Builder<AddParcelToDeliveryChange>
 */
final class AddParcelToDeliveryChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Parcel|ParcelBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $deliveryId;

    /**

     * @var ?string
     */
    private $shippingKey;

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

     * @return null|Parcel
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ParcelBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Delivery">Delivery</a> to which the Parcel was added.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> associated with the Delivery.
     * Only present when the Order uses the <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
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
     * @param ?Parcel $nextValue
     * @return $this
     */
    public function withNextValue(?Parcel $nextValue)
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

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ParcelBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddParcelToDeliveryChange
    {
        return new AddParcelToDeliveryChangeModel(
            $this->change,
            $this->nextValue instanceof ParcelBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->deliveryId,
            $this->shippingKey
        );
    }

    public static function of(): AddParcelToDeliveryChangeBuilder
    {
        return new self();
    }
}
