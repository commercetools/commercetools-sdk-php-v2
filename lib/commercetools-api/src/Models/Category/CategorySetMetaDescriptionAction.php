<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface CategorySetMetaDescriptionAction extends CategoryUpdateAction
{
    
    const FIELD_META_DESCRIPTION = 'metaDescription';

    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaDescription();
    public function setMetaDescription(?LocalizedString $metaDescription): void;
}