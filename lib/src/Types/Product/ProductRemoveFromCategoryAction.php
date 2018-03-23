<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Category\CategoryReference;

interface ProductRemoveFromCategoryAction extends ProductUpdateAction {
    const FIELD_CATEGORY = 'category';
    const FIELD_STAGED = 'staged';

    /**
     * @return CategoryReference
     */
    public function getCategory();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param CategoryReference $category
     * @return $this
     */
    public function setCategory(CategoryReference $category);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
