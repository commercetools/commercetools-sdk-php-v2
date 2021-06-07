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
use Commercetools\Import\Models\Orders\DeliveryItemCollection;
use stdClass;

/**
 * @implements Builder<ParcelItems>
 */
final class ParcelItemsBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ?string $parcelId
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

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


    public function build(): ParcelItems
    {
        return new ParcelItemsModel(
            $this->parcelId,
            $this->items
        );
    }

    public static function of(): ParcelItemsBuilder
    {
        return new self();
    }
}
