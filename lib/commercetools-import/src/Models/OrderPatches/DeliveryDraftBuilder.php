<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Common\AddressBuilder;
use Commercetools\Import\Models\Orders\DeliveryItemCollection;
use stdClass;

/**
 * @implements Builder<DeliveryDraft>
 */
final class DeliveryDraftBuilder implements Builder
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

     * @var ?DeliveryParcelDraftCollection
     */
    private $parcels;

    /**
     * <p>Line Items or Custom Line Items to deliver. It can also be specified individually for each <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p>Address to which the Parcels are delivered.</p>
     *

     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * <p>Information regarding the appearance, content, and shipment of a parcel.</p>
     *

     * @return null|DeliveryParcelDraftCollection
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
     * @param ?DeliveryParcelDraftCollection $parcels
     * @return $this
     */
    public function withParcels(?DeliveryParcelDraftCollection $parcels)
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

    public function build(): DeliveryDraft
    {
        return new DeliveryDraftModel(
            $this->items,
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address,
            $this->parcels
        );
    }

    public static function of(): DeliveryDraftBuilder
    {
        return new self();
    }
}
