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
 * @implements Builder<ProductRemovedFromCategoryMessagePayload>
 */
final class ProductRemovedFromCategoryMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var CategoryReference|?CategoryReferenceBuilder
     */
    private $category;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

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
    public function withType(?string $type)
    {
        $this->type = $type;

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

    public function build(): ProductRemovedFromCategoryMessagePayload
    {
        return new ProductRemovedFromCategoryMessagePayloadModel(
            $this->type,
            $this->staged,
            ($this->category instanceof CategoryReferenceBuilder ? $this->category->build() : $this->category)
        );
    }

    public static function of(): ProductRemovedFromCategoryMessagePayloadBuilder
    {
        return new self();
    }
}
