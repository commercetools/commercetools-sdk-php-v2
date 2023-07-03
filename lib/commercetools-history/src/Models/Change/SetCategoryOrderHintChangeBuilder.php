<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\CategoryOrderHints;
use Commercetools\History\Models\Common\CategoryOrderHintsBuilder;

/**
 * @implements Builder<SetCategoryOrderHintChange>
 */
final class SetCategoryOrderHintChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|CategoryOrderHints|CategoryOrderHintsBuilder
     */
    private $previousValue;

    /**

     * @var null|CategoryOrderHints|CategoryOrderHintsBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $catalogData;

    /**

     * @var ?string
     */
    private $categoryId;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CategoryOrderHintsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CategoryOrderHintsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:Category">Category</a>.</p>
     *

     * @return null|string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?CategoryOrderHints $previousValue
     * @return $this
     */
    public function withPreviousValue(?CategoryOrderHints $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CategoryOrderHints $nextValue
     * @return $this
     */
    public function withNextValue(?CategoryOrderHints $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?CategoryOrderHintsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?CategoryOrderHintsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetCategoryOrderHintChange
    {
        return new SetCategoryOrderHintChangeModel(
            $this->change,
            $this->previousValue instanceof CategoryOrderHintsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof CategoryOrderHintsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->catalogData,
            $this->categoryId
        );
    }

    public static function of(): SetCategoryOrderHintChangeBuilder
    {
        return new self();
    }
}
