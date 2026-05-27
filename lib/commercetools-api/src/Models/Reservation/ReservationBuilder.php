<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Reservation;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Inventory\InventoryEntryReference;
use Commercetools\Api\Models\Inventory\InventoryEntryReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Reservation>
 */
final class ReservationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var null|InventoryEntryReference|InventoryEntryReferenceBuilder
     */
    private $inventoryEntry;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $owner;

    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?string
     */
    private $state;

    /**
     * <p>Unique identifier of the Reservation.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Reservation.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Reservation was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Reservation was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Date and time (UTC) the Reservation will no longer be valid. It can take a few minutes after expiry
     * for the <code>state</code> to be updated to <code>Expired</code> and the stock to be released.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * <p>IDs and references that last modified the Reservation.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Reservation.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>Reference to the related <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> used to manage the inventory.</p>
     *

     * @return null|InventoryEntryReference
     */
    public function getInventoryEntry()
    {
        return $this->inventoryEntry instanceof InventoryEntryReferenceBuilder ? $this->inventoryEntry->build() : $this->inventoryEntry;
    }

    /**
     * <p>The quantity of inventory that is reserved.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>Reference to the owner of the Reservation.</p>
     *

     * @return null|Reference
     */
    public function getOwner()
    {
        return $this->owner instanceof ReferenceBuilder ? $this->owner->build() : $this->owner;
    }

    /**
     * <p>Unique identifier of the LineItem this Reservation is associated with.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>Current state of the Reservation.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     * @return $this
     */
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?InventoryEntryReference $inventoryEntry
     * @return $this
     */
    public function withInventoryEntry(?InventoryEntryReference $inventoryEntry)
    {
        $this->inventoryEntry = $inventoryEntry;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?Reference $owner
     * @return $this
     */
    public function withOwner(?Reference $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withInventoryEntry() instead
     * @return $this
     */
    public function withInventoryEntryBuilder(?InventoryEntryReferenceBuilder $inventoryEntry)
    {
        $this->inventoryEntry = $inventoryEntry;

        return $this;
    }

    /**
     * @deprecated use withOwner() instead
     * @return $this
     */
    public function withOwnerBuilder(?ReferenceBuilder $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function build(): Reservation
    {
        return new ReservationModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->expiresAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->inventoryEntry instanceof InventoryEntryReferenceBuilder ? $this->inventoryEntry->build() : $this->inventoryEntry,
            $this->quantity,
            $this->owner instanceof ReferenceBuilder ? $this->owner->build() : $this->owner,
            $this->lineItemId,
            $this->state
        );
    }

    public static function of(): ReservationBuilder
    {
        return new self();
    }
}
