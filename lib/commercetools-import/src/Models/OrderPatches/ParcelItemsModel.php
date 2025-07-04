<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Orders\DeliveryItemCollection;
use stdClass;

/**
 * @internal
 */
final class ParcelItemsModel extends JsonObjectModel implements ParcelItems
{
    /**
     *
     * @var ?string
     */
    protected $parcelId;

    /**
     *
     * @var ?DeliveryItemCollection
     */
    protected $items;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $parcelId = null,
        ?DeliveryItemCollection $items = null
    ) {
        $this->parcelId = $parcelId;
        $this->items = $items;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *
     *
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    /**
     * <p>Items in the Parcel.</p>
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
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
}
