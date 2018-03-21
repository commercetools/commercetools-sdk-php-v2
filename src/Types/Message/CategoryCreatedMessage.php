<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Category\Category;

interface CategoryCreatedMessage extends Message {
    const FIELD_CATEGORY = 'category';

    /**
     * @return Category
     */
    public function getCategory();

    /**
     * @param Category $category
     * @return $this
     */
    public function setCategory(Category $category);

}
