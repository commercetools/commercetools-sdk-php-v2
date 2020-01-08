<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\ParcelDraftCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderAddDeliveryAction>
 */
final class StagedOrderAddDeliveryActionBuilder implements Builder
{
    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @var Address|?AddressBuilder
     */
    private $address;

    /**
     * @var ?ParcelDraftCollection
     */
    private $parcels;

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * @return null|ParcelDraftCollection
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcels(?ParcelDraftCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): StagedOrderAddDeliveryAction
    {
        return new StagedOrderAddDeliveryActionModel(
            $this->items,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address),
            $this->parcels
        );
    }

    public static function of(): StagedOrderAddDeliveryActionBuilder
    {
        return new self();
    }
}
