<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface InventoryEntry extends LoggedResource
{
    const FIELD_SKU = 'sku';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    const FIELD_CUSTOM = 'custom';

    /**
     * <p>The unique ID of the inventory entry.</p>.
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * <p>Optional connection to a particular supplier.</p>.
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>Overall amount of stock.
     * (available + reserved)</p>.
     *
     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * <p>Available amount of stock.
     * (available means: <code>quantityOnStock</code> - reserved quantity)</p>.
     *
     * @return null|int
     */
    public function getAvailableQuantity();

    /**
     * <p>The time period in days, that tells how often this inventory entry is restocked.</p>.
     *
     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * <p>The date and time of the next restock.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setSku(?string $sku): void;

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    public function setQuantityOnStock(?int $quantityOnStock): void;

    public function setAvailableQuantity(?int $availableQuantity): void;

    public function setRestockableInDays(?int $restockableInDays): void;

    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;

    public function setCustom(?CustomFields $custom): void;
}
