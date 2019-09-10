<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ExternalTaxAmountDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetShippingMethodTaxAmountAction extends StagedOrderUpdateAction
{
    
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     *
     * @return ExternalTaxAmountDraft|null
     */
    public function getExternalTaxAmount();
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}