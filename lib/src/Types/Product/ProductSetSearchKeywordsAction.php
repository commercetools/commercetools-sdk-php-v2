<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetSearchKeywordsAction extends ProductUpdateAction
{
    const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    const FIELD_STAGED = 'staged';

    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param SearchKeywords $searchKeywords
     * @return $this
     */
    public function setSearchKeywords(SearchKeywords $searchKeywords);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
