<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ProductTailoring>
 */
final class ProductTailoringBuilder implements Builder
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

     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var ?bool
     */
    private $published;

    /**

     * @var null|ProductTailoringData|ProductTailoringDataBuilder
     */
    private $current;

    /**

     * @var null|ProductTailoringData|ProductTailoringDataBuilder
     */
    private $staged;

    /**

     * @var ?bool
     */
    private $hasStagedChanges;

    /**

     * @var ?WarningObjectCollection
     */
    private $warnings;

    /**
     * <p>Unique identifier of the ProductTailoring.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the ProductTailoring.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the ProductTailoring was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the ProductTailoring was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the ProductTailoring.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the ProductTailoring.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the ProductTailoring.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The Store to which the ProductTailoring belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p>Reference to the Product the ProductTailoring belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p><code>true</code> if the ProductTailoring is published.</p>
     *

     * @return null|bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * <p>Current (published) data of the ProductTailoring.</p>
     *

     * @return null|ProductTailoringData
     */
    public function getCurrent()
    {
        return $this->current instanceof ProductTailoringDataBuilder ? $this->current->build() : $this->current;
    }

    /**
     * <p>Staged (unpublished) data of the ProductTailoring.</p>
     *

     * @return null|ProductTailoringData
     */
    public function getStaged()
    {
        return $this->staged instanceof ProductTailoringDataBuilder ? $this->staged->build() : $this->staged;
    }

    /**
     * <p><code>true</code> if the <code>staged</code> data is different from the <code>current</code> data.</p>
     *

     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        return $this->hasStagedChanges;
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
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

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
     * @param ?ProductTailoringData $current
     * @return $this
     */
    public function withCurrent(?ProductTailoringData $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @param ?ProductTailoringData $staged
     * @return $this
     */
    public function withStaged(?ProductTailoringData $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?bool $hasStagedChanges
     * @return $this
     */
    public function withHasStagedChanges(?bool $hasStagedChanges)
    {
        $this->hasStagedChanges = $hasStagedChanges;

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
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

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
    public function withCurrentBuilder(?ProductTailoringDataBuilder $current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @deprecated use withStaged() instead
     * @return $this
     */
    public function withStagedBuilder(?ProductTailoringDataBuilder $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    public function build(): ProductTailoring
    {
        return new ProductTailoringModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->published,
            $this->current instanceof ProductTailoringDataBuilder ? $this->current->build() : $this->current,
            $this->staged instanceof ProductTailoringDataBuilder ? $this->staged->build() : $this->staged,
            $this->hasStagedChanges,
            $this->warnings
        );
    }

    public static function of(): ProductTailoringBuilder
    {
        return new self();
    }
}
