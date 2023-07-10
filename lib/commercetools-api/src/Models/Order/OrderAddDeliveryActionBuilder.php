<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderAddDeliveryAction>
 */
final class OrderAddDeliveryActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $deliveryKey;

    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**

     * @var ?ParcelDraftCollection
     */
    private $parcels;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier of a Delivery.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey()
    {
        return $this->deliveryKey;
    }

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a>, required for <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * <p>Polymorphic base type that represents a postal address and contact details.
     * Depending on the read or write action, it can be either <a href="ctp:api:type:Address">Address</a> or <a href="ctp:api:type:AddressDraft">AddressDraft</a> that
     * only differ in the data type for the optional <code>custom</code> field.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress()
    {
        return $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address;
    }

    /**

     * @return null|ParcelDraftCollection
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * <p>Custom Fields for the Transaction.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $deliveryKey
     * @return $this
     */
    public function withDeliveryKey(?string $deliveryKey)
    {
        $this->deliveryKey = $deliveryKey;

        return $this;
    }

    /**
     * @param ?DeliveryItemCollection $items
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

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
     * @param ?BaseAddress $address
     * @return $this
     */
    public function withAddress(?BaseAddress $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param ?ParcelDraftCollection $parcels
     * @return $this
     */
    public function withParcels(?ParcelDraftCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?BaseAddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): OrderAddDeliveryAction
    {
        return new OrderAddDeliveryActionModel(
            $this->deliveryKey,
            $this->items,
            $this->shippingKey,
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address,
            $this->parcels,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): OrderAddDeliveryActionBuilder
    {
        return new self();
    }
}
