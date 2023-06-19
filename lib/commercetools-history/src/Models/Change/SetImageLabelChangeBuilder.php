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
use Commercetools\History\Models\Common\Image;
use Commercetools\History\Models\Common\ImageBuilder;

/**
 * @implements Builder<SetImageLabelChange>
 */
final class SetImageLabelChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Image|ImageBuilder
     */
    private $previousValue;

    /**

     * @var null|Image|ImageBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $catalogData;

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

     * @return null|Image
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ImageBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Image
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ImageBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?Image $previousValue
     * @return $this
     */
    public function withPreviousValue(?Image $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Image $nextValue
     * @return $this
     */
    public function withNextValue(?Image $nextValue)
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ImageBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ImageBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetImageLabelChange
    {
        return new SetImageLabelChangeModel(
            $this->change,
            $this->previousValue instanceof ImageBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ImageBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->catalogData
        );
    }

    public static function of(): SetImageLabelChangeBuilder
    {
        return new self();
    }
}
