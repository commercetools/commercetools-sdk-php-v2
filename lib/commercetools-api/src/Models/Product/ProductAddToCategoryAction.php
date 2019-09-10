<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Category\CategoryResourceIdentifier;

interface ProductAddToCategoryAction extends ProductUpdateAction
{
    
    const FIELD_CATEGORY = 'category';
    const FIELD_ORDER_HINT = 'orderHint';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return CategoryResourceIdentifier|null
     */
    public function getCategory();
    
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
    public function setCategory(?CategoryResourceIdentifier $category): void;
    
    public function setOrderHint(?string $orderHint): void;
    
    public function setStaged(?bool $staged): void;
}