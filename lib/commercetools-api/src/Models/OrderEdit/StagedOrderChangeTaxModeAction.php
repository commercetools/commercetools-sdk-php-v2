<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderChangeTaxModeAction extends StagedOrderUpdateAction
{
    
    const FIELD_TAX_MODE = 'taxMode';

    /**
     *
     * @return string|null
     */
    public function getTaxMode();
    public function setTaxMode(?string $taxMode): void;
}