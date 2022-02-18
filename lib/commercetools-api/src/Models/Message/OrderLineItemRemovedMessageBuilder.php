<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ItemShippingDetails;
use Commercetools\Api\Models\Cart\ItemShippingDetailsBuilder;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<OrderLineItemRemovedMessage>
 */
final class OrderLineItemRemovedMessageBuilder implements Builder
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
     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var ?int
     */
    private $sequenceNumber;

    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $resource;

    /**
     * @var ?int
     */
    private $resourceVersion;

    /**
     * @var null|UserProvidedIdentifiers|UserProvidedIdentifiersBuilder
     */
    private $resourceUserProvidedIdentifiers;

    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ?int
     */
    private $removedQuantity;

    /**
     * @var ?int
     */
    private $newQuantity;

    /**
     * @var ?ItemStateCollection
     */
    private $newState;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $newTotalPrice;

    /**
     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $newTaxedPrice;

    /**
     * @var null|Price|PriceBuilder
     */
    private $newPrice;

    /**
     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $newShippingDetail;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * @return null|int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        return $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|int
     */
    public function getRemovedQuantity()
    {
        return $this->removedQuantity;
    }

    /**
     * @return null|int
     */
    public function getNewQuantity()
    {
        return $this->newQuantity;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getNewState()
    {
        return $this->newState;
    }

    /**
     * <p>Base polymorphic read-only Money type which is stored in cent precision or high precision. The actual type is determined by the <code>type</code> field.</p>
     *
     * @return null|TypedMoney
     */
    public function getNewTotalPrice()
    {
        return $this->newTotalPrice instanceof TypedMoneyBuilder ? $this->newTotalPrice->build() : $this->newTotalPrice;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice()
    {
        return $this->newTaxedPrice instanceof TaxedItemPriceBuilder ? $this->newTaxedPrice->build() : $this->newTaxedPrice;
    }

    /**
     * @return null|Price
     */
    public function getNewPrice()
    {
        return $this->newPrice instanceof PriceBuilder ? $this->newPrice->build() : $this->newPrice;
    }

    /**
     * @return null|ItemShippingDetails
     */
    public function getNewShippingDetail()
    {
        return $this->newShippingDetail instanceof ItemShippingDetailsBuilder ? $this->newShippingDetail->build() : $this->newShippingDetail;
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
     * @param ?int $sequenceNumber
     * @return $this
     */
    public function withSequenceNumber(?int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @param ?Reference $resource
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?int $resourceVersion
     * @return $this
     */
    public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * @param ?UserProvidedIdentifiers $resourceUserProvidedIdentifiers
     * @return $this
     */
    public function withResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

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
     * @param ?int $removedQuantity
     * @return $this
     */
    public function withRemovedQuantity(?int $removedQuantity)
    {
        $this->removedQuantity = $removedQuantity;

        return $this;
    }

    /**
     * @param ?int $newQuantity
     * @return $this
     */
    public function withNewQuantity(?int $newQuantity)
    {
        $this->newQuantity = $newQuantity;

        return $this;
    }

    /**
     * @param ?ItemStateCollection $newState
     * @return $this
     */
    public function withNewState(?ItemStateCollection $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @param ?TypedMoney $newTotalPrice
     * @return $this
     */
    public function withNewTotalPrice(?TypedMoney $newTotalPrice)
    {
        $this->newTotalPrice = $newTotalPrice;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $newTaxedPrice
     * @return $this
     */
    public function withNewTaxedPrice(?TaxedItemPrice $newTaxedPrice)
    {
        $this->newTaxedPrice = $newTaxedPrice;

        return $this;
    }

    /**
     * @param ?Price $newPrice
     * @return $this
     */
    public function withNewPrice(?Price $newPrice)
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    /**
     * @param ?ItemShippingDetails $newShippingDetail
     * @return $this
     */
    public function withNewShippingDetail(?ItemShippingDetails $newShippingDetail)
    {
        $this->newShippingDetail = $newShippingDetail;

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
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withResourceUserProvidedIdentifiers() instead
     * @return $this
     */
    public function withResourceUserProvidedIdentifiersBuilder(?UserProvidedIdentifiersBuilder $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;

        return $this;
    }

    /**
     * @deprecated use withNewTotalPrice() instead
     * @return $this
     */
    public function withNewTotalPriceBuilder(?TypedMoneyBuilder $newTotalPrice)
    {
        $this->newTotalPrice = $newTotalPrice;

        return $this;
    }

    /**
     * @deprecated use withNewTaxedPrice() instead
     * @return $this
     */
    public function withNewTaxedPriceBuilder(?TaxedItemPriceBuilder $newTaxedPrice)
    {
        $this->newTaxedPrice = $newTaxedPrice;

        return $this;
    }

    /**
     * @deprecated use withNewPrice() instead
     * @return $this
     */
    public function withNewPriceBuilder(?PriceBuilder $newPrice)
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    /**
     * @deprecated use withNewShippingDetail() instead
     * @return $this
     */
    public function withNewShippingDetailBuilder(?ItemShippingDetailsBuilder $newShippingDetail)
    {
        $this->newShippingDetail = $newShippingDetail;

        return $this;
    }

    public function build(): OrderLineItemRemovedMessage
    {
        return new OrderLineItemRemovedMessageModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->sequenceNumber,
            $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->resourceVersion,
            $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers,
            $this->lineItemId,
            $this->removedQuantity,
            $this->newQuantity,
            $this->newState,
            $this->newTotalPrice instanceof TypedMoneyBuilder ? $this->newTotalPrice->build() : $this->newTotalPrice,
            $this->newTaxedPrice instanceof TaxedItemPriceBuilder ? $this->newTaxedPrice->build() : $this->newTaxedPrice,
            $this->newPrice instanceof PriceBuilder ? $this->newPrice->build() : $this->newPrice,
            $this->newShippingDetail instanceof ItemShippingDetailsBuilder ? $this->newShippingDetail->build() : $this->newShippingDetail
        );
    }

    public static function of(): OrderLineItemRemovedMessageBuilder
    {
        return new self();
    }
}
