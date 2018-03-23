<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\State\StateReference;
use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Builder\ProductUpdateBuilder;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Review\ReviewRatingStatistics;
use Commercetools\Types\Common\Resource;

class ProductModel extends ResourceModel implements Product {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var ProductTypeReference
     */
    protected $productType;
    /**
     * @var ProductCatalogData
     */
    protected $masterData;
    /**
     * @var TaxCategoryReference
     */
    protected $taxCategory;
    /**
     * @var StateReference
     */
    protected $state;
    /**
     * @var ReviewRatingStatistics
     */
    protected $reviewRatingStatistics;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(Product::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            $value = $this->raw(Product::FIELD_PRODUCT_TYPE);
            if (is_null($value)) {
                return $this->mapData(ProductTypeReference::class, null);
            }
            $value = $this->mapData(ProductTypeReference::class, $value);

            $this->productType = $value;
        }
        return $this->productType;
    }
    /**
     * @return ProductCatalogData
     */
    public function getMasterData()
    {
        if (is_null($this->masterData)) {
            $value = $this->raw(Product::FIELD_MASTER_DATA);
            if (is_null($value)) {
                return $this->mapData(ProductCatalogData::class, null);
            }
            $value = $this->mapData(ProductCatalogData::class, $value);

            $this->masterData = $value;
        }
        return $this->masterData;
    }
    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw(Product::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }
    /**
     * @return StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(Product::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics()
    {
        if (is_null($this->reviewRatingStatistics)) {
            $value = $this->raw(Product::FIELD_REVIEW_RATING_STATISTICS);
            if (is_null($value)) {
                return $this->mapData(ReviewRatingStatistics::class, null);
            }
            $value = $this->mapData(ReviewRatingStatistics::class, $value);

            $this->reviewRatingStatistics = $value;
        }
        return $this->reviewRatingStatistics;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }
    /**
     * @param ProductCatalogData $masterData
     * @return $this
     */
    public function setMasterData(ProductCatalogData $masterData)
    {
        $this->masterData = $masterData;

        return $this;
    }
    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }
    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state)
    {
        $this->state = $state;

        return $this;
    }
    /**
     * @param ReviewRatingStatistics $reviewRatingStatistics
     * @return $this
     */
    public function setReviewRatingStatistics(ReviewRatingStatistics $reviewRatingStatistics)
    {
        $this->reviewRatingStatistics = $reviewRatingStatistics;

        return $this;
    }


    /**
     * @return ProductUpdateBuilder
     */
    public function update()
    {
        $builder = new ProductUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
