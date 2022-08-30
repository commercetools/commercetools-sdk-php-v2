<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductVariantAvailabilityModel extends JsonObjectModel implements ProductVariantAvailability
{
    /**
     *
     * @var ?ProductVariantChannelAvailabilityMap
     */
    protected $channels;

    /**
     *
     * @var ?bool
     */
    protected $isOnStock;

    /**
     *
     * @var ?int
     */
    protected $restockableInDays;

    /**
     *
     * @var ?int
     */
    protected $availableQuantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductVariantChannelAvailabilityMap $channels = null,
        ?bool $isOnStock = null,
        ?int $restockableInDays = null,
        ?int $availableQuantity = null
    ) {
        $this->channels = $channels;
        $this->isOnStock = $isOnStock;
        $this->restockableInDays = $restockableInDays;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * <p>For each <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> with a supply Channel, an entry is added to <code>channels</code>.</p>
     *
     *
     * @return null|ProductVariantChannelAvailabilityMap
     */
    public function getChannels()
    {
        if (is_null($this->channels)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNELS);
            if (is_null($data)) {
                return null;
            }

            $this->channels = ProductVariantChannelAvailabilityMapModel::of($data);
        }

        return $this->channels;
    }

    /**
     * <p>Indicates whether a Product Variant is in stock.</p>
     *
     *
     * @return null|bool
     */
    public function getIsOnStock()
    {
        if (is_null($this->isOnStock)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->isOnStock = (bool) $data;
        }

        return $this->isOnStock;
    }

    /**
     * <p>Number of days to restock a Product Variant once it is out of stock.</p>
     *
     *
     * @return null|int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESTOCKABLE_IN_DAYS);
            if (is_null($data)) {
                return null;
            }
            $this->restockableInDays = (int) $data;
        }

        return $this->restockableInDays;
    }

    /**
     * <p>Number of items of the Product Variant that are in stock.</p>
     *
     *
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        if (is_null($this->availableQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_AVAILABLE_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->availableQuantity = (int) $data;
        }

        return $this->availableQuantity;
    }


    /**
     * @param ?ProductVariantChannelAvailabilityMap $channels
     */
    public function setChannels(?ProductVariantChannelAvailabilityMap $channels): void
    {
        $this->channels = $channels;
    }

    /**
     * @param ?bool $isOnStock
     */
    public function setIsOnStock(?bool $isOnStock): void
    {
        $this->isOnStock = $isOnStock;
    }

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }
}
