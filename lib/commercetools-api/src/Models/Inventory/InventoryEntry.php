<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface InventoryEntry extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_SKU = 'sku';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique identifier of the InventoryEntry.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the InventoryEntry.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the InventoryEntry was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the InventoryEntry was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier of the InventoryEntry.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><a href="ctp:api:type:ProductVariant">ProductVariant</a> <code>sku</code> of the InventoryEntry.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> that supplies this InventoryEntry.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * <p>Overall amount of stock (<code>availableQuantity</code> + reserved).</p>
     *

     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * <p>Available amount of stock (<code>quantityOnStock</code> - reserved).</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity();

    /**
     * <p>How often the InventoryEntry is restocked (in days).</p>
     *

     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * <p>Date and time of the next restock.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * <p>Custom Fields of the InventoryEntry.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;

    /**
     * @param ?int $quantityOnStock
     */
    public function setQuantityOnStock(?int $quantityOnStock): void;

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void;

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void;

    /**
     * @param ?DateTimeImmutable $expectedDelivery
     */
    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
