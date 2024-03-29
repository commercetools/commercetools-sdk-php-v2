<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\AddressDraft;
use Commercetools\Api\Models\Common\AddressDraftBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DeliveryDraft>
 */
final class DeliveryDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**

     * @var ?ParcelDraftCollection
     */
    private $parcels;

    /**

     * @var null|AddressDraft|AddressDraftBuilder
     */
    private $address;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier of the Delivery.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Line Items or Custom Line Items to deliver.
     * It can also be specified individually for each <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p>Information regarding the appearance, content, and shipment of a parcel.</p>
     *

     * @return null|ParcelDraftCollection
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * <p>Address to which the Parcels are delivered.</p>
     *

     * @return null|AddressDraft
     */
    public function getAddress()
    {
        return $this->address instanceof AddressDraftBuilder ? $this->address->build() : $this->address;
    }

    /**
     * <p>Custom Fields for the Delivery.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

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
     * @param ?ParcelDraftCollection $parcels
     * @return $this
     */
    public function withParcels(?ParcelDraftCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * @param ?AddressDraft $address
     * @return $this
     */
    public function withAddress(?AddressDraft $address)
    {
        $this->address = $address;

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
    public function withAddressBuilder(?AddressDraftBuilder $address)
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

    public function build(): DeliveryDraft
    {
        return new DeliveryDraftModel(
            $this->key,
            $this->items,
            $this->parcels,
            $this->address instanceof AddressDraftBuilder ? $this->address->build() : $this->address,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): DeliveryDraftBuilder
    {
        return new self();
    }
}
