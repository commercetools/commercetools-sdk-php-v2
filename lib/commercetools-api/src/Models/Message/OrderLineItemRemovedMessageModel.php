<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ItemShippingDetails;
use Commercetools\Api\Models\Cart\ItemShippingDetailsModel;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class OrderLineItemRemovedMessageModel extends JsonObjectModel implements OrderLineItemRemovedMessage
{
    public const DISCRIMINATOR_VALUE = 'OrderLineItemRemoved';
    /**

     * @var ?string
     */
    protected $id;

    /**

     * @var ?int
     */
    protected $version;

    /**

     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**

     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**

     * @var ?CreatedBy
     */
    protected $createdBy;

    /**

     * @var ?int
     */
    protected $sequenceNumber;

    /**

     * @var ?Reference
     */
    protected $resource;

    /**

     * @var ?int
     */
    protected $resourceVersion;

    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;

    /**

     * @var ?string
     */
    protected $lineItemId;

    /**

     * @var ?int
     */
    protected $removedQuantity;

    /**

     * @var ?int
     */
    protected $newQuantity;

    /**

     * @var ?ItemStateCollection
     */
    protected $newState;

    /**

     * @var ?TypedMoney
     */
    protected $newTotalPrice;

    /**

     * @var ?TaxedItemPrice
     */
    protected $newTaxedPrice;

    /**

     * @var ?Price
     */
    protected $newPrice;

    /**

     * @var ?ItemShippingDetails
     */
    protected $newShippingDetail;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?int $sequenceNumber = null,
        ?Reference $resource = null,
        ?int $resourceVersion = null,
        ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        ?string $lineItemId = null,
        ?int $removedQuantity = null,
        ?int $newQuantity = null,
        ?ItemStateCollection $newState = null,
        ?TypedMoney $newTotalPrice = null,
        ?TaxedItemPrice $newTaxedPrice = null,
        ?Price $newPrice = null,
        ?ItemShippingDetails $newShippingDetail = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->sequenceNumber = $sequenceNumber;
        $this->resource = $resource;
        $this->resourceVersion = $resourceVersion;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->lineItemId = $lineItemId;
        $this->removedQuantity = $removedQuantity;
        $this->newQuantity = $newQuantity;
        $this->newState = $newState;
        $this->newTotalPrice = $newTotalPrice;
        $this->newTaxedPrice = $newTaxedPrice;
        $this->newPrice = $newPrice;
        $this->newShippingDetail = $newShippingDetail;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Unique identifier of the Message.</p>
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

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**

     * @return null|int
     */
    public function getSequenceNumber()
    {
        if (is_null($this->sequenceNumber)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SEQUENCE_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->sequenceNumber = (int) $data;
        }

        return $this->sequenceNumber;
    }

    /**
     * <p>A Reference represents a loose reference to another resource in the same Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *

     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**

     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**

     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        if (is_null($this->resourceUserProvidedIdentifiers)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
            if (is_null($data)) {
                return null;
            }

            $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
        }

        return $this->resourceUserProvidedIdentifiers;
    }

    /**

     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**

     * @return null|int
     */
    public function getRemovedQuantity()
    {
        if (is_null($this->removedQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_REMOVED_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->removedQuantity = (int) $data;
        }

        return $this->removedQuantity;
    }

    /**

     * @return null|int
     */
    public function getNewQuantity()
    {
        if (is_null($this->newQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NEW_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->newQuantity = (int) $data;
        }

        return $this->newQuantity;
    }

    /**

     * @return null|ItemStateCollection
     */
    public function getNewState()
    {
        if (is_null($this->newState)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEW_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->newState = ItemStateCollection::fromArray($data);
        }

        return $this->newState;
    }

    /**
     * <p>Base polymorphic read-only Money type which is stored in cent precision or high precision. The actual type is determined by the <code>type</code> field.</p>
     *

     * @return null|TypedMoney
     */
    public function getNewTotalPrice()
    {
        if (is_null($this->newTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->newTotalPrice = $className::of($data);
        }

        return $this->newTotalPrice;
    }

    /**

     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice()
    {
        if (is_null($this->newTaxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newTaxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->newTaxedPrice;
    }

    /**

     * @return null|Price
     */
    public function getNewPrice()
    {
        if (is_null($this->newPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newPrice = PriceModel::of($data);
        }

        return $this->newPrice;
    }

    /**

     * @return null|ItemShippingDetails
     */
    public function getNewShippingDetail()
    {
        if (is_null($this->newShippingDetail)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_SHIPPING_DETAIL);
            if (is_null($data)) {
                return null;
            }

            $this->newShippingDetail = ItemShippingDetailsModel::of($data);
        }

        return $this->newShippingDetail;
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

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?int $sequenceNumber
     */
    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     */
    public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?int $removedQuantity
     */
    public function setRemovedQuantity(?int $removedQuantity): void
    {
        $this->removedQuantity = $removedQuantity;
    }

    /**
     * @param ?int $newQuantity
     */
    public function setNewQuantity(?int $newQuantity): void
    {
        $this->newQuantity = $newQuantity;
    }

    /**
     * @param ?ItemStateCollection $newState
     */
    public function setNewState(?ItemStateCollection $newState): void
    {
        $this->newState = $newState;
    }

    /**
     * @param ?TypedMoney $newTotalPrice
     */
    public function setNewTotalPrice(?TypedMoney $newTotalPrice): void
    {
        $this->newTotalPrice = $newTotalPrice;
    }

    /**
     * @param ?TaxedItemPrice $newTaxedPrice
     */
    public function setNewTaxedPrice(?TaxedItemPrice $newTaxedPrice): void
    {
        $this->newTaxedPrice = $newTaxedPrice;
    }

    /**
     * @param ?Price $newPrice
     */
    public function setNewPrice(?Price $newPrice): void
    {
        $this->newPrice = $newPrice;
    }

    /**
     * @param ?ItemShippingDetails $newShippingDetail
     */
    public function setNewShippingDetail(?ItemShippingDetails $newShippingDetail): void
    {
        $this->newShippingDetail = $newShippingDetail;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Message::FIELD_CREATED_AT]) && $data[Message::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Message::FIELD_CREATED_AT] = $data[Message::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Message::FIELD_LAST_MODIFIED_AT]) && $data[Message::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Message::FIELD_LAST_MODIFIED_AT] = $data[Message::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
