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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductAddToCategoryAction>
 */
final class ProductAddToCategoryActionBuilder implements Builder
{
    /**
     * @var null|CategoryResourceIdentifier|CategoryResourceIdentifierBuilder
     */
    private $category;

    /**
     * @var ?string
     */
    private $orderHint;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getCategory()
    {
        return $this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category;
    }

    /**
     * @return null|string
     */
    public function getOrderHint()
    {
        return $this->orderHint;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?CategoryResourceIdentifier $category
     * @return $this
     */
    public function withCategory(?CategoryResourceIdentifier $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @param ?string $orderHint
     * @return $this
     */
    public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @deprecated use withCategory() instead
     * @return $this
     */
    public function withCategoryBuilder(?CategoryResourceIdentifierBuilder $category)
    {
        $this->category = $category;

        return $this;
    }

    public function build(): ProductAddToCategoryAction
    {
        return new ProductAddToCategoryActionModel(
            $this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category,
            $this->orderHint,
            $this->staged
        );
    }

    public static function of(): ProductAddToCategoryActionBuilder
    {
        return new self();
    }
}
