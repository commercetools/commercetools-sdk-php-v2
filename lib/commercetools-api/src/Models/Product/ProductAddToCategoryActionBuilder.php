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
 * @implements Builder<ProductAddToCategoryAction>
 */
final class ProductAddToCategoryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $orderHint;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var CategoryResourceIdentifier|?CategoryResourceIdentifierBuilder
     */
    private $category;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
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
     * @return null|CategoryResourceIdentifier
     */
    public function getCategory()
    {
        return $this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;

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

    public function build(): ProductAddToCategoryAction
    {
        return new ProductAddToCategoryActionModel(
            $this->action,
            $this->orderHint,
            $this->staged,
            ($this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category)
        );
    }

    public static function of(): ProductAddToCategoryActionBuilder
    {
        return new self();
    }
}
