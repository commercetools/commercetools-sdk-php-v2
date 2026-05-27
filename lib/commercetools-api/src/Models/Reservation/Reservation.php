<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Reservation;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Inventory\InventoryEntryReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Reservation extends BaseResource
{
    public const FIELD_EXPIRES_AT = 'expiresAt';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_INVENTORY_ENTRY = 'inventoryEntry';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_OWNER = 'owner';
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_STATE = 'state';

    /**
     * <p>Unique identifier of the Reservation.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Reservation.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Reservation was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Reservation was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Date and time (UTC) the Reservation will no longer be valid. It can take a few minutes after expiry
     * for the <code>state</code> to be updated to <code>Expired</code> and the stock to be released.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * <p>IDs and references that last modified the Reservation.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Reservation.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Reference to the related <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> used to manage the inventory.</p>
     *

     * @return null|InventoryEntryReference
     */
    public function getInventoryEntry();

    /**
     * <p>The quantity of inventory that is reserved.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Reference to the owner of the Reservation.</p>
     *

     * @return null|Reference
     */
    public function getOwner();

    /**
     * <p>Unique identifier of the LineItem this Reservation is associated with.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Current state of the Reservation.</p>
     *

     * @return null|string
     */
    public function getState();

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
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?InventoryEntryReference $inventoryEntry
     */
    public function setInventoryEntry(?InventoryEntryReference $inventoryEntry): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?Reference $owner
     */
    public function setOwner(?Reference $owner): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
