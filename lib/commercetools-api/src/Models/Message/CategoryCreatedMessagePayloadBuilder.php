<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryCreatedMessagePayload>
 */
final class CategoryCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var Category|?CategoryBuilder
     */
    private $category;

    /**
     * @return null|Category
     */
    public function getCategory()
    {
        return $this->category instanceof CategoryBuilder ? $this->category->build() : $this->category;
    }

    /**
     * @return $this
     */
    public function withCategory(?Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategoryBuilder(?CategoryBuilder $category)
    {
        $this->category = $category;

        return $this;
    }

    public function build(): CategoryCreatedMessagePayload
    {
        return new CategoryCreatedMessagePayloadModel(
            ($this->category instanceof CategoryBuilder ? $this->category->build() : $this->category)
        );
    }

    public static function of(): CategoryCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
