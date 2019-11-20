<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryResourceIdentifier;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRemoveFromCategoryAction>
 */
final class ProductRemoveFromCategoryActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var CategoryResourceIdentifier|?CategoryResourceIdentifierBuilder
     */
    private $category;

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getCategory()
    {
        return $this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategory(?CategoryResourceIdentifier $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategoryBuilder(?CategoryResourceIdentifierBuilder $category)
    {
        $this->category = $category;

        return $this;
    }

    public function build(): ProductRemoveFromCategoryAction
    {
        return new ProductRemoveFromCategoryActionModel(
            $this->staged,
            ($this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category)
        );
    }

    public static function of(): ProductRemoveFromCategoryActionBuilder
    {
        return new self();
    }
}
