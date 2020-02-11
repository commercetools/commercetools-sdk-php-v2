<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryBuilder;

/**
 * @implements Builder<CategoryCreatedMessagePayload>
 */
final class CategoryCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|Category|CategoryBuilder
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
            $this->category instanceof CategoryBuilder ? $this->category->build() : $this->category
        );
    }

    public static function of(): CategoryCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
