<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductSetSearchKeywordsActionModel extends ProductUpdateActionModel implements ProductSetSearchKeywordsAction {
    const DISCRIMINATOR_VALUE = 'setSearchKeywords';

    /**
     * @var SearchKeywords
     */
    protected $searchKeywords;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            $value = $this->raw(ProductSetSearchKeywordsAction::FIELD_SEARCH_KEYWORDS);
            if (is_null($value)) {
                return $this->mapData(SearchKeywords::class, null);
            }
            $value = $this->mapData(SearchKeywords::class, $value);

            $this->searchKeywords = $value;
        }
        return $this->searchKeywords;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductSetSearchKeywordsAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param SearchKeywords $searchKeywords
     * @return $this
     */
    public function setSearchKeywords(SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
