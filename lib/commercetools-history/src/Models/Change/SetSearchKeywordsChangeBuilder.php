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

     * @var ?string
     */
    private $catalogData;

    /**

     * @var null|SearchKeywords|SearchKeywordsBuilder
     */
    private $previousValue;

    /**

     * @var null|SearchKeywords|SearchKeywordsBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setSearchKeywords</code></p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**

     * @return null|SearchKeywords
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof SearchKeywordsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**

     * @return null|SearchKeywords
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof SearchKeywordsBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

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
            $this->catalogData,
            $this->previousValue instanceof SearchKeywordsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof SearchKeywordsBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetSearchKeywordsChangeBuilder
    {
        return new self();
    }
}
