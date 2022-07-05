<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Address;
use Commercetools\History\Models\Common\AddressBuilder;
use Commercetools\History\Models\Common\DeliveryItemCollection;
use Commercetools\History\Models\Common\ParcelCollection;

/**
 * @implements Builder<DeliveryChangeValue>
 */
final class DeliveryChangeValueBuilder implements Builder
{
    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**

     * @var null|Address|AddressBuilder
     */
    private $address;

    /**

     * @var ?ParcelCollection
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

     * @return null|ParcelCollection
     */
    public function getParcels()
    {
        return $this->parcels;
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
     * @param ?Address $address
     * @return $this
     */
    public function withAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param ?ParcelCollection $parcels
     * @return $this
     */
    public function withParcels(?ParcelCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): DeliveryChangeValue
    {
        return new DeliveryChangeValueModel(
            $this->items,
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address,
            $this->parcels
        );
    }

    public static function of(): DeliveryChangeValueBuilder
    {
        return new self();
    }
}
