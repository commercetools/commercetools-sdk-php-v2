<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\OrderEdit\StagedOrderAddCustomLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDiscountCodeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddParcelToDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddPaymentAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddReturnInfoAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddShoppingListAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemMoneyAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemQuantityAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeLineItemQuantityAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeOrderStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangePaymentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeShipmentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxCalculationModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxRoundingModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportCustomLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveCustomLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDiscountCodeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveParcelFromDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemovePaymentAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCountryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerEmailAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerGroupAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerIdAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemShippingDetailsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryItemsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDirectDiscountsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetItemShippingAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetItemShippingAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemDistributionChannelAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemPriceAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemShippingDetailsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTotalPriceAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLocaleAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderNumberAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderTotalTaxAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelItemsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelMeasurementsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelTrackingDataAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetPurchaseOrderNumberAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnInfoAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnItemCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnItemCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnPaymentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnShipmentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndCustomShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingRateInputAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetStoreAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionCustomLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateSyncInfoAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderUpdateAction extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'action';
    public const FIELD_ACTION = 'action';

    /**

     * @return null|string
     */
    public function getAction();
}
