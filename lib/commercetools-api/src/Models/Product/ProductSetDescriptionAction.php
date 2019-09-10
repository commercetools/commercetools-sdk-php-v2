<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductSetDescriptionAction extends ProductUpdateAction
{
    
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setDescription(?LocalizedString $description): void;
    
    public function setStaged(?bool $staged): void;
}