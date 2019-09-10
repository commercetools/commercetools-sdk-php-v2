<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductSetCategoryOrderHintAction extends ProductUpdateAction
{
    
    const FIELD_CATEGORY_ID = 'categoryId';
    const FIELD_ORDER_HINT = 'orderHint';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return string|null
     */
    public function getCategoryId();
    
    /**
     *
     * @return string|null
     */
    public function getOrderHint();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setCategoryId(?string $categoryId): void;
    
    public function setOrderHint(?string $orderHint): void;
    
    public function setStaged(?bool $staged): void;
}