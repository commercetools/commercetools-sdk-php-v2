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
     * <p>The <code>id</code> of the Category to add the <code>orderHint</code>.</p>
     *

     * @return null|string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * <p>A string representing a number between 0 and 1. Must start with <code>0.</code> and cannot end with <code>0</code>. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getOrderHint()
    {
        return $this->orderHint;
    }

    /**
     * <p>If <code>true</code>, only the staged <code>categoryOrderHints</code> is updated. If <code>false</code>, both the current and staged <code>categoryOrderHints</code> are updated.</p>
     *

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
