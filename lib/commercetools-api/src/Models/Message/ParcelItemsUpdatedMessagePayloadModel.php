<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\DeliveryItemCollection;

final class ParcelItemsUpdatedMessagePayloadModel extends JsonObjectModel implements ParcelItemsUpdatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ParcelItemsUpdated';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $parcelId;

    /**
     * @var ?string
     */
    protected $deliveryId;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $oldItems;


    public function __construct(
        string $parcelId = null,
        string $deliveryId = null,
        DeliveryItemCollection $items = null,
        DeliveryItemCollection $oldItems = null
    ) {
        $this->parcelId = $parcelId;
        $this->deliveryId = $deliveryId;
        $this->items = $items;
        $this->oldItems = $oldItems;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ParcelItemsUpdatedMessagePayload::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ParcelItemsUpdatedMessagePayload::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ParcelItemsUpdatedMessagePayload::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getOldItems()
    {
        if (is_null($this->oldItems)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ParcelItemsUpdatedMessagePayload::FIELD_OLD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->oldItems = DeliveryItemCollection::fromArray($data);
        }

        return $this->oldItems;
    }

    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    public function setOldItems(?DeliveryItemCollection $oldItems): void
    {
        $this->oldItems = $oldItems;
    }



}
