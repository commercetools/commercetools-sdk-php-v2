<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductChangeNameAction extends ProductUpdateAction
{
    
    const FIELD_NAME = 'name';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setName(?LocalizedString $name): void;
    
    public function setStaged(?bool $staged): void;
}