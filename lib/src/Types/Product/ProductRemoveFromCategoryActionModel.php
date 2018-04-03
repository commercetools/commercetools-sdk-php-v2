<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Category\CategoryReference;

class ProductRemoveFromCategoryActionModel extends ProductUpdateActionModel implements ProductRemoveFromCategoryAction {
    const DISCRIMINATOR_VALUE = 'removeFromCategory';

    /**
     * @var CategoryReference
     */
    protected $category;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return CategoryReference
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            $value = $this->raw(ProductRemoveFromCategoryAction::FIELD_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(CategoryReference::class, null);
            }
            $value = $this->mapData(CategoryReference::class, $value);

            $this->category = $value;
        }
        return $this->category;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductRemoveFromCategoryAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param CategoryReference $category
     * @return $this
     */
    public function setCategory(CategoryReference $category)
    {
        $this->category = $category;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
