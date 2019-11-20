<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Category\CategoryReference;
use Commercetools\Api\Models\Category\CategoryReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductAddedToCategoryMessagePayload>
 */
final class ProductAddedToCategoryMessagePayloadBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var CategoryReference|?CategoryReferenceBuilder
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
     * @return null|CategoryReference
     */
    public function getCategory()
    {
        return $this->category instanceof CategoryReferenceBuilder ? $this->category->build() : $this->category;
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
    public function withCategory(?CategoryReference $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategoryBuilder(?CategoryReferenceBuilder $category)
    {
        $this->category = $category;

        return $this;
    }

    public function build(): ProductAddedToCategoryMessagePayload
    {
        return new ProductAddedToCategoryMessagePayloadModel(
            $this->staged,
            ($this->category instanceof CategoryReferenceBuilder ? $this->category->build() : $this->category)
        );
    }

    public static function of(): ProductAddedToCategoryMessagePayloadBuilder
    {
        return new self();
    }
}
