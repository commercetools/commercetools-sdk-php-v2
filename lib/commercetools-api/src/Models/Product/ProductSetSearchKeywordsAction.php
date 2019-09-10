<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductSetSearchKeywordsAction extends ProductUpdateAction
{
    
    const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return SearchKeywords|null
     */
    public function getSearchKeywords();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;
    
    public function setStaged(?bool $staged): void;
}