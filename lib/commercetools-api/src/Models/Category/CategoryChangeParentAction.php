<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;

interface CategoryChangeParentAction extends CategoryUpdateAction
{
    
    const FIELD_PARENT = 'parent';

    /**
     *
     * @return CategoryResourceIdentifier|null
     */
    public function getParent();
    public function setParent(?CategoryResourceIdentifier $parent): void;
}