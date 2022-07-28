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
final class ProductVariantChannelAvailabilityModel extends JsonObjectModel implements ProductVariantChannelAvailability
{
    /**

     * @var ?bool
     */
    protected $isOnStock;

    /**

     * @var ?int
     */
    protected $restockableInDays;

    /**

     * @var ?int
     */
    protected $availableQuantity;

    /**

     * @var ?string
     */
    protected $id;

    /**

     * @var ?int
     */
    protected $version;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $isOnStock = null,
        ?int $restockableInDays = null,
        ?int $availableQuantity = null,
        ?string $id = null,
        ?int $version = null
    ) {
        $this->isOnStock = $isOnStock;
        $this->restockableInDays = $restockableInDays;
        $this->availableQuantity = $availableQuantity;
        $this->id = $id;
        $this->version = $version;
    }

    /**
     * <p>Indicates whether a Product Variant is in stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
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
     * <p>Number of days to restock a Product Variant once it is out of stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
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
     * <p>Number of items of this Product Variant that are in stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
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
     * <p>Unique identifier of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a>.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
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

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}
