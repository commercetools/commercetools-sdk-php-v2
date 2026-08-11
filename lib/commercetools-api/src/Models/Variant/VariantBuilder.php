<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Variant>
 */
final class VariantBuilder implements Builder
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

     * @var ?string
     */
    private $key;

    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var ?bool
     */
    private $published;

    /**

     * @var null|VariantData|VariantDataBuilder
     */
    private $current;

    /**

     * @var null|VariantData|VariantDataBuilder
     */
    private $staged;

    /**

     * @var ?WarningObjectCollection
     */
    private $warnings;

    /**
     * <p>Unique identifier of the Variant.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Variant.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Variant was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Variant was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the Variant.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the Variant.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the Variant.
     * This is different from <a href="ctp:api:type:Product">Product</a> <code>key</code>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>A unique, sequential identifier of the Variant within the parent Product.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>Reference to the parent <a href="ctp:api:type:Product">Product</a> the Variant belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Whether the Variant is published, <code>false</code> if it is unpublished.</p>
     *

     * @return null|bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * <p>The current data of the Variant.</p>
     *

     * @return null|VariantData
     */
    public function getCurrent()
    {
        return $this->current instanceof VariantDataBuilder ? $this->current->build() : $this->current;
    }

    /**
     * <p>The staged data of the Variant.
     * Only present if there are staged changes that differ from the current data.</p>
     *

     * @return null|VariantData
     */
    public function getStaged()
    {
        return $this->staged instanceof VariantDataBuilder ? $this->staged->build() : $this->staged;
    }

    /**
     * <p>Warnings about processing of a request.
     * Appears in response to requests with response status code <code>202 Accepted</code>.</p>
     *

     * @return null|WarningObjectCollection
     */
    public function getWarnings()
    {
        return $this->warnings;
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
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

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
     * @param ?bool $published
     * @return $this
     */
    public function withPublished(?bool $published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @param ?VariantData $current
     * @return $this
     */
    public function withCurrent(?VariantData $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @param ?VariantData $staged
     * @return $this
     */
    public function withStaged(?VariantData $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?WarningObjectCollection $warnings
     * @return $this
     */
    public function withWarnings(?WarningObjectCollection $warnings)
    {
        $this->warnings = $warnings;

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
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withCurrent() instead
     * @return $this
     */
    public function withCurrentBuilder(?VariantDataBuilder $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @deprecated use withStaged() instead
     * @return $this
     */
    public function withStagedBuilder(?VariantDataBuilder $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    public function build(): Variant
    {
        return new VariantModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->variantId,
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->published,
            $this->current instanceof VariantDataBuilder ? $this->current->build() : $this->current,
            $this->staged instanceof VariantDataBuilder ? $this->staged->build() : $this->staged,
            $this->warnings
        );
    }

    public static function of(): VariantBuilder
    {
        return new self();
    }
}
