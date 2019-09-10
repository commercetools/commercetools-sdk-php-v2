<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductSetMetaTitleAction extends ProductUpdateAction
{
    
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaTitle();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setMetaTitle(?LocalizedString $metaTitle): void;
    
    public function setStaged(?bool $staged): void;
}