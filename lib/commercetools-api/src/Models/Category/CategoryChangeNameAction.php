<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface CategoryChangeNameAction extends CategoryUpdateAction
{
    
    const FIELD_NAME = 'name';

    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    public function setName(?LocalizedString $name): void;
}