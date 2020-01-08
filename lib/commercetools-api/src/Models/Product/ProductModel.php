<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\Review\ReviewRatingStatisticsModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ProductModel extends JsonObjectModel implements Product
{
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
     * @var ?string
     */
    protected $key;

    /**
     * @var ?ProductTypeReference
     */
    protected $productType;

    /**
     * @var ?ProductCatalogData
     */
    protected $masterData;

    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     * @var ?StateReference
     */
    protected $state;

    /**
     * @var ?ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;

    public function __construct(
        string $id = null,
        int $version = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        LastModifiedBy $lastModifiedBy = null,
        CreatedBy $createdBy = null,
        string $key = null,
        ProductTypeReference $productType = null,
        ProductCatalogData $masterData = null,
        TaxCategoryReference $taxCategory = null,
        StateReference $state = null,
        ReviewRatingStatistics $reviewRatingStatistics = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->key = $key;
        $this->productType = $productType;
        $this->masterData = $masterData;
        $this->taxCategory = $taxCategory;
        $this->state = $state;
        $this->reviewRatingStatistics = $reviewRatingStatistics;
    }

    /**
     * <p>The unique ID of the product.</p>.
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Product::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The current version of the product.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Product::FIELD_VERSION);
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
            $data = $this->raw(Product::FIELD_CREATED_AT);
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
            $data = $this->raw(Product::FIELD_LAST_MODIFIED_AT);
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
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Product::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Product::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>User-specific unique identifier for the product.
     * <em>Product keys are different from product variant keys.</em></p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Product::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Product::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     * <p>The product data in the master catalog.</p>.
     *
     * @return null|ProductCatalogData
     */
    public function getMasterData()
    {
        if (is_null($this->masterData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Product::FIELD_MASTER_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->masterData = ProductCatalogDataModel::of($data);
        }

        return $this->masterData;
    }

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Product::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Product::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>Statistics about the review ratings taken into account for this product.</p>.
     *
     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics()
    {
        if (is_null($this->reviewRatingStatistics)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Product::FIELD_REVIEW_RATING_STATISTICS);
            if (is_null($data)) {
                return null;
            }

            $this->reviewRatingStatistics = ReviewRatingStatisticsModel::of($data);
        }

        return $this->reviewRatingStatistics;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }

    public function setMasterData(?ProductCatalogData $masterData): void
    {
        $this->masterData = $masterData;
    }

    public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Product::FIELD_CREATED_AT]) && $data[Product::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Product::FIELD_CREATED_AT] = $data[Product::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Product::FIELD_LAST_MODIFIED_AT]) && $data[Product::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Product::FIELD_LAST_MODIFIED_AT] = $data[Product::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
