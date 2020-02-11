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
use Commercetools\Api\Models\Category\CategoryReference;
use Commercetools\Api\Models\Category\CategoryReferenceBuilder;

/**
 * @implements Builder<ProductAddedToCategoryMessagePayload>
 */
final class ProductAddedToCategoryMessagePayloadBuilder implements Builder
{
    /**
     * @var null|CategoryReference|CategoryReferenceBuilder
     */
    private $category;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|CategoryReference
     */
    public function getCategory()
    {
        return $this->category instanceof CategoryReferenceBuilder ? $this->category->build() : $this->category;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

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
            $this->category instanceof CategoryReferenceBuilder ? $this->category->build() : $this->category,
            $this->staged
        );
    }

    public static function of(): ProductAddedToCategoryMessagePayloadBuilder
    {
        return new self();
    }
}
