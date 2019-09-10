<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddCustomLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddCustomLineItemActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDeliveryActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDiscountCodeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddDiscountCodeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddItemShippingAddressActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddLineItemActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddParcelToDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddParcelToDeliveryActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddPaymentAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddPaymentActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddReturnInfoAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddReturnInfoActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddShoppingListAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderAddShoppingListActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemMoneyAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemMoneyActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemQuantityAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeCustomLineItemQuantityActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeLineItemQuantityAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeLineItemQuantityActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeOrderStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeOrderStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangePaymentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangePaymentStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeShipmentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeShipmentStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxCalculationModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxCalculationModeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxModeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxRoundingModeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderChangeTaxRoundingModeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportCustomLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportCustomLineItemStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderImportLineItemStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveCustomLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveCustomLineItemActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDeliveryActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDiscountCodeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveDiscountCodeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveItemShippingAddressActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveLineItemAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveLineItemActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveParcelFromDeliveryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemoveParcelFromDeliveryActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemovePaymentAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderRemovePaymentActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetBillingAddressActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCountryAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCountryActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomFieldActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomFieldActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemCustomTypeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemShippingDetailsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemShippingDetailsActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxAmountActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomLineItemTaxRateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomShippingMethodActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomTypeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerEmailAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerEmailActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerGroupAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerGroupActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerIdAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetCustomerIdActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryAddressActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryItemsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetDeliveryItemsActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomFieldAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomFieldActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomTypeAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemCustomTypeActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemPriceAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemPriceActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemShippingDetailsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemShippingDetailsActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxAmountActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTaxRateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTotalPriceAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLineItemTotalPriceActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLocaleAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetLocaleActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderNumberAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderNumberActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderTotalTaxAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetOrderTotalTaxActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelItemsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelItemsActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelMeasurementsAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelMeasurementsActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelTrackingDataAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetParcelTrackingDataActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnPaymentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnPaymentStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnShipmentStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetReturnShipmentStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndCustomShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndCustomShippingMethodActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingAddressAndShippingMethodActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxAmountAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxAmountActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxRateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingMethodTaxRateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingRateInputAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderSetShippingRateInputActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionCustomLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionCustomLineItemStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionLineItemStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionLineItemStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionStateAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderTransitionStateActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateItemShippingAddressAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateItemShippingAddressActionBuilder;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateSyncInfoAction;
use Commercetools\Api\Models\OrderEdit\StagedOrderUpdateSyncInfoActionBuilder;

/**
 * @implements Builder<StagedOrderUpdateAction>
 */
final class StagedOrderUpdateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    public function build(): StagedOrderUpdateAction {
        return new StagedOrderUpdateActionModel(
            $this->action
        );
    }
    
    public static function of(): StagedOrderUpdateActionBuilder
    {
        return new self();
    }
}