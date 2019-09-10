<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;

interface Product extends LoggedResource
{
    
    const FIELD_KEY = 'key';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_MASTER_DATA = 'masterData';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_STATE = 'state';
    const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return ProductTypeReference|null
     */
    public function getProductType();
    
    /**
     *
     * @return ProductCatalogData|null
     */
    public function getMasterData();
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return StateReference|null
     */
    public function getState();
    
    /**
     *
     * @return ReviewRatingStatistics|null
     */
    public function getReviewRatingStatistics();
    public function setKey(?string $key): void;
    
    public function setProductType(?ProductTypeReference $productType): void;
    
    public function setMasterData(?ProductCatalogData $masterData): void;
    
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;
    
    public function setState(?StateReference $state): void;
    
    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void;
}