<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductDiscountSetDescriptionAction extends ProductDiscountUpdateAction
{
    
    const FIELD_DESCRIPTION = 'description';

    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    public function setDescription(?LocalizedString $description): void;
}