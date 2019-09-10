<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface DiscountCodeSetDescriptionAction extends DiscountCodeUpdateAction
{
    
    const FIELD_DESCRIPTION = 'description';

    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    public function setDescription(?LocalizedString $description): void;
}