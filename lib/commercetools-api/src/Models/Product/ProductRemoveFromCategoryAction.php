<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Category\CategoryResourceIdentifier;

interface ProductRemoveFromCategoryAction extends ProductUpdateAction
{
    
    const FIELD_CATEGORY = 'category';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return CategoryResourceIdentifier|null
     */
    public function getCategory();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setCategory(?CategoryResourceIdentifier $category): void;
    
    public function setStaged(?bool $staged): void;
}