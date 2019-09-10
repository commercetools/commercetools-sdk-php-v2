<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface CategoryChangeSlugAction extends CategoryUpdateAction
{
    
    const FIELD_SLUG = 'slug';

    /**
     *
     * @return LocalizedString|null
     */
    public function getSlug();
    public function setSlug(?LocalizedString $slug): void;
}