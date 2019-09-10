<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductSetMetaDescriptionAction extends ProductUpdateAction
{
    
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaDescription();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setMetaDescription(?LocalizedString $metaDescription): void;
    
    public function setStaged(?bool $staged): void;
}