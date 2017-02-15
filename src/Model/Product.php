<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Product extends Resource {
    protected $key;
    protected $productType;
    protected $masterData;
    protected $taxCategory;
    protected $state;
    protected $reviewRatingStatistics;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return ProductTypeReference
     */
    public function getProductType(): ProductTypeReference
    {
        if (is_null($this->productType)) {
            $value = $this->raw('productType');
            if (!is_null($value)) {
                $this->productType = Mapper::map($value, ProductTypeReference::class);
            } else {
                return Mapper::map([], ProductTypeReference::class);
            }
        }
        return $this->productType;
    }
                

    /**
     * @return ProductCatalogData
     */
    public function getMasterData(): ProductCatalogData
    {
        if (is_null($this->masterData)) {
            $value = $this->raw('masterData');
            if (!is_null($value)) {
                $this->masterData = Mapper::map($value, ProductCatalogData::class);
            } else {
                return Mapper::map([], ProductCatalogData::class);
            }
        }
        return $this->masterData;
    }
                

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory(): TaxCategoryReference
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw('taxCategory');
            if (!is_null($value)) {
                $this->taxCategory = Mapper::map($value, TaxCategoryReference::class);
            } else {
                return Mapper::map([], TaxCategoryReference::class);
            }
        }
        return $this->taxCategory;
    }
                

    /**
     * @return StateReference
     */
    public function getState(): StateReference
    {
        if (is_null($this->state)) {
            $value = $this->raw('state');
            if (!is_null($value)) {
                $this->state = Mapper::map($value, StateReference::class);
            } else {
                return Mapper::map([], StateReference::class);
            }
        }
        return $this->state;
    }
                

    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics(): ReviewRatingStatistics
    {
        if (is_null($this->reviewRatingStatistics)) {
            $value = $this->raw('reviewRatingStatistics');
            if (!is_null($value)) {
                $this->reviewRatingStatistics = Mapper::map($value, ReviewRatingStatistics::class);
            } else {
                return Mapper::map([], ReviewRatingStatistics::class);
            }
        }
        return $this->reviewRatingStatistics;
    }
                
}
