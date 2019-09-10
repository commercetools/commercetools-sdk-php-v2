<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductSetMetaKeywordsAction extends ProductUpdateAction
{
    
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaKeywords();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;
    
    public function setStaged(?bool $staged): void;
}