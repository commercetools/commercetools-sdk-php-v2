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
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ProductVariantDeletedMessage>
 */
final class ProductVariantDeletedMessageBuilder implements Builder
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

     * @var null|ProductVariant|ProductVariantBuilder
     */
    private $variant;

    /**

     * @var ?array
     */
    private $removedImageUrls;

    /**

     * @var ?bool
     */
    private $staged;

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
     * <p>IDs and references that last modified the Message.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Message.</p>
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
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">Product Variant</a> that was added.</p>
     *

     * @return null|ProductVariant
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * <p>List of image URLs that were removed with the <a href="ctp:api:type:ProductRemoveVariantAction">Remove Product Variant</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        return $this->removedImageUrls;
    }

    /**
     * <p>If <code>true</code>, this message informs that only the staged ProductVariant has been removed by the update action.
     * If <code>false</code>, both the current and staged ProductVariant have been removed.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
     * @param ?ProductVariant $variant
     * @return $this
     */
    public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?array $removedImageUrls
     * @return $this
     */
    public function withRemovedImageUrls(?array $removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

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
     * @deprecated use withVariant() instead
     * @return $this
     */
    public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    public function build(): ProductVariantDeletedMessage
    {
        return new ProductVariantDeletedMessageModel(
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
            $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant,
            $this->removedImageUrls,
            $this->staged
        );
    }

    public static function of(): ProductVariantDeletedMessageBuilder
    {
        return new self();
    }
}
