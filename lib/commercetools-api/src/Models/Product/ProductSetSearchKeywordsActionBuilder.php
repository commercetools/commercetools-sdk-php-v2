<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductSetSearchKeywordsAction>
 */
final class ProductSetSearchKeywordsActionBuilder implements Builder
{
    /**
     * @var SearchKeywords|?SearchKeywordsBuilder
     */
    private $searchKeywords;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        return $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return $this
     */
    public function withSearchKeywords(?SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

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
    public function withSearchKeywordsBuilder(?SearchKeywordsBuilder $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    public function build(): ProductSetSearchKeywordsAction
    {
        return new ProductSetSearchKeywordsActionModel(
            ($this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords),
            $this->staged
        );
    }

    public static function of(): ProductSetSearchKeywordsActionBuilder
    {
        return new self();
    }
}
