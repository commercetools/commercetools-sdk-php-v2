<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetCategoryOrderHintAction>
 */
final class ProductSetCategoryOrderHintActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $categoryId;

    /**
     * @var ?string
     */
    private $orderHint;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
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
     * @param ?string $categoryId
     * @return $this
     */
    public function withCategoryId(?string $categoryId)
    {
        $this->categoryId = $categoryId;

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


    public function build(): ProductSetCategoryOrderHintAction
    {
        return new ProductSetCategoryOrderHintActionModel(
            $this->categoryId,
            $this->orderHint,
            $this->staged
        );
    }

    public static function of(): ProductSetCategoryOrderHintActionBuilder
    {
        return new self();
    }
}
