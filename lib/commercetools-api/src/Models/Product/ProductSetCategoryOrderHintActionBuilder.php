<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductSetCategoryOrderHintAction>
 */
final class ProductSetCategoryOrderHintActionBuilder implements Builder
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
     * @var ?string
     */
    private $categoryId;

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
     * @return null|string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
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
    public function withCategoryId(?string $categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function build(): ProductSetCategoryOrderHintAction
    {
        return new ProductSetCategoryOrderHintActionModel(
            $this->action,
            $this->orderHint,
            $this->staged,
            $this->categoryId
        );
    }

    public static function of(): ProductSetCategoryOrderHintActionBuilder
    {
        return new self();
    }
}
