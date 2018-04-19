<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\State\StateReference;
use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Builder\ProductUpdateBuilder;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Review\ReviewRatingStatistics;
use Commercetools\Types\Common\Resource;

interface Product extends Resource
{
    const FIELD_KEY = 'key';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_MASTER_DATA = 'masterData';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_STATE = 'state';
    const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return ProductTypeReference
     */
    public function getProductType();

    /**
     * @return ProductCatalogData
     */
    public function getMasterData();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return StateReference
     */
    public function getState();

    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType);

    /**
     * @param ProductCatalogData $masterData
     * @return $this
     */
    public function setMasterData(ProductCatalogData $masterData);

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

    /**
     * @param ReviewRatingStatistics $reviewRatingStatistics
     * @return $this
     */
    public function setReviewRatingStatistics(ReviewRatingStatistics $reviewRatingStatistics);

    /**
     * @return ProductUpdateBuilder
     */
    public function update();
}
