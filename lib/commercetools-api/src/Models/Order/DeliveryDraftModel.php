<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\AddressDraft;
use Commercetools\Api\Models\Common\AddressDraftModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DeliveryDraftModel extends JsonObjectModel implements DeliveryDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     *
     * @var ?ParcelDraftCollection
     */
    protected $parcels;

    /**
     *
     * @var ?AddressDraft
     */
    protected $address;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?DeliveryItemCollection $items = null,
        ?ParcelDraftCollection $parcels = null,
        ?AddressDraft $address = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->items = $items;
        $this->parcels = $parcels;
        $this->address = $address;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier of the Delivery.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Line Items or Custom Line Items to deliver.
     * It can also be specified individually for each <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *
     *
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * <p>Information regarding the appearance, content, and shipment of a parcel.</p>
     *
     *
     * @return null|ParcelDraftCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PARCELS);
            if (is_null($data)) {
                return null;
            }
            $this->parcels = ParcelDraftCollection::fromArray($data);
        }

        return $this->parcels;
    }

    /**
     * <p>Address to which the Parcels are delivered.</p>
     *
     *
     * @return null|AddressDraft
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressDraftModel::of($data);
        }

        return $this->address;
    }

    /**
     * <p>Custom Fields for the Delivery.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    /**
     * @param ?ParcelDraftCollection $parcels
     */
    public function setParcels(?ParcelDraftCollection $parcels): void
    {
        $this->parcels = $parcels;
    }

    /**
     * @param ?AddressDraft $address
     */
    public function setAddress(?AddressDraft $address): void
    {
        $this->address = $address;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
