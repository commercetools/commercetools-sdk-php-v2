<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelection;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelectionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ProductSelectionVariantSelectionChangedMessage>
 */
final class ProductSelectionVariantSelectionChangedMessageBuilder implements Builder
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

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $oldVariantSelection;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $newVariantSelection;

    /**
     * <p>Unique identifier of the Message. Can be used to track which Messages have been processed.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Version of a resource. In case of Messages, this is always <code>1</code>.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Message was generated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Value of <code>createdAt</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Value of <code>createdBy</code>.</p>
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
     * <p>Message number in relation to other Messages for a given resource. The <code>sequenceNumber</code> of the next Message for the resource is the successor of the <code>sequenceNumber</code> of the current Message. Meaning, the <code>sequenceNumber</code> of the next Message equals the <code>sequenceNumber</code> of the current Message + 1.
     * <code>sequenceNumber</code> can be used to ensure that Messages are processed in the correct order for a particular resource.</p>
     *

     * @return null|int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource on which the change or action was performed.</p>
     *

     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * <p>Version of the resource on which the change or action was performed.</p>
     *

     * @return null|int
     */
    public function getResourceVersion()
    {
        return $this->resourceVersion;
    }

    /**
     * <p>User-provided identifiers of the resource, such as <code>key</code> or <code>externalId</code>. Only present if the resource has such identifiers.</p>
     *

     * @return null|UserProvidedIdentifiers
     */
    public function getResourceUserProvidedIdentifiers()
    {
        return $this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers;
    }

    /**
     * <p><a href="ctp:api:type:Product">Product</a> for which the Product Variant Selection changed.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Product Variant Selection before the <a href="ctp:api:type:ProductSelectionSetVariantSelectionAction">Set Variant Selection</a> update action.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getOldVariantSelection()
    {
        return $this->oldVariantSelection instanceof ProductVariantSelectionBuilder ? $this->oldVariantSelection->build() : $this->oldVariantSelection;
    }

    /**
     * <p>Product Variant Selection after the <a href="ctp:api:type:ProductSelectionSetVariantSelectionAction">Set Variant Selection</a> update action.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getNewVariantSelection()
    {
        return $this->newVariantSelection instanceof ProductVariantSelectionBuilder ? $this->newVariantSelection->build() : $this->newVariantSelection;
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
     * @param ?ProductReference $product
     * @return $this
     */
    public function withProduct(?ProductReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @param ?ProductVariantSelection $oldVariantSelection
     * @return $this
     */
    public function withOldVariantSelection(?ProductVariantSelection $oldVariantSelection)
    {
        $this->oldVariantSelection = $oldVariantSelection;

        return $this;
    }

    /**
     * @param ?ProductVariantSelection $newVariantSelection
     * @return $this
     */
    public function withNewVariantSelection(?ProductVariantSelection $newVariantSelection)
    {
        $this->newVariantSelection = $newVariantSelection;

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
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withOldVariantSelection() instead
     * @return $this
     */
    public function withOldVariantSelectionBuilder(?ProductVariantSelectionBuilder $oldVariantSelection)
    {
        $this->oldVariantSelection = $oldVariantSelection;

        return $this;
    }

    /**
     * @deprecated use withNewVariantSelection() instead
     * @return $this
     */
    public function withNewVariantSelectionBuilder(?ProductVariantSelectionBuilder $newVariantSelection)
    {
        $this->newVariantSelection = $newVariantSelection;

        return $this;
    }

    public function build(): ProductSelectionVariantSelectionChangedMessage
    {
        return new ProductSelectionVariantSelectionChangedMessageModel(
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
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->oldVariantSelection instanceof ProductVariantSelectionBuilder ? $this->oldVariantSelection->build() : $this->oldVariantSelection,
            $this->newVariantSelection instanceof ProductVariantSelectionBuilder ? $this->newVariantSelection->build() : $this->newVariantSelection
        );
    }

    public static function of(): ProductSelectionVariantSelectionChangedMessageBuilder
    {
        return new self();
    }
}
