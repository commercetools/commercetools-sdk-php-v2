<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;

interface ProductDiscountUpdate extends JsonObject
{
    
    const FIELD_VERSION = 'version';
    const FIELD_ACTIONS = 'actions';

    /**
     *
     * @return int|null
     */
    public function getVersion();
    
    /**
     *
     * @return ProductDiscountUpdateActionCollection|null
     */
    public function getActions();
    public function setVersion(?int $version): void;
    
    public function setActions(?ProductDiscountUpdateActionCollection $actions): void;
}