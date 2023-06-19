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
use Commercetools\History\Models\Common\SearchKeywords;
use Commercetools\History\Models\Common\SearchKeywordsBuilder;

/**
 * @implements Builder<SetSearchKeywordsChange>
 */
final class SetSearchKeywordsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|SearchKeywords|SearchKeywordsBuilder
     */
    private $previousValue;

    /**

     * @var null|SearchKeywords|SearchKeywordsBuilder
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

     * @return null|SearchKeywords
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof SearchKeywordsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|SearchKeywords
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof SearchKeywordsBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?SearchKeywords $previousValue
     * @return $this
     */
    public function withPreviousValue(?SearchKeywords $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?SearchKeywords $nextValue
     * @return $this
     */
    public function withNextValue(?SearchKeywords $nextValue)
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
    public function withPreviousValueBuilder(?SearchKeywordsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?SearchKeywordsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetSearchKeywordsChange
    {
        return new SetSearchKeywordsChangeModel(
            $this->change,
            $this->previousValue instanceof SearchKeywordsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof SearchKeywordsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->catalogData
        );
    }

    public static function of(): SetSearchKeywordsChangeBuilder
    {
        return new self();
    }
}
