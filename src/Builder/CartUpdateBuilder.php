<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Cart\CartUpdateAction;

use Commercetools\Types\Cart\CartSetShippingMethodTaxRateAction;
use Commercetools\Types\Cart\CartChangeTaxModeAction;
use Commercetools\Types\Cart\CartSetCustomTypeAction;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxAmountAction;
use Commercetools\Types\Cart\CartRemoveLineItemAction;
use Commercetools\Types\Cart\CartRecalculateAction;
use Commercetools\Types\Cart\CartChangeLineItemQuantityAction;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomFieldAction;
use Commercetools\Types\Cart\CartChangeTaxCalculationModeAction;
use Commercetools\Types\Cart\CartSetLocaleAction;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomTypeAction;
use Commercetools\Types\Cart\CartSetLineItemCustomFieldAction;
use Commercetools\Types\Cart\CartSetShippingRateInputAction;
use Commercetools\Types\Cart\CartSetLineItemTotalPriceAction;
use Commercetools\Types\Cart\CartAddLineItemAction;
use Commercetools\Types\Cart\CartSetCustomShippingMethodAction;
use Commercetools\Types\Cart\CartSetCustomerEmailAction;
use Commercetools\Types\Cart\CartAddShoppingListAction;
use Commercetools\Types\Cart\CartSetShippingMethodTaxAmountAction;
use Commercetools\Types\Cart\CartSetLineItemTaxRateAction;
use Commercetools\Types\Cart\CartSetCountryAction;
use Commercetools\Types\Cart\CartAddDiscountCodeAction;
use Commercetools\Types\Cart\CartSetAnonymousIdAction;
use Commercetools\Types\Cart\CartSetCartTotalTaxAction;
use Commercetools\Types\Cart\CartAddPaymentAction;
use Commercetools\Types\Cart\CartRemoveCustomLineItemAction;
use Commercetools\Types\Cart\CartSetCustomerIdAction;
use Commercetools\Types\Cart\CartSetCustomerGroupAction;
use Commercetools\Types\Cart\CartChangeCustomLineItemMoneyAction;
use Commercetools\Types\Cart\CartSetLineItemTaxAmountAction;
use Commercetools\Types\Cart\CartSetCustomFieldAction;
use Commercetools\Types\Cart\CartRemovePaymentAction;
use Commercetools\Types\Cart\CartChangeCustomLineItemQuantityAction;
use Commercetools\Types\Cart\CartChangeTaxRoundingModeAction;
use Commercetools\Types\Cart\CartSetLineItemCustomTypeAction;
use Commercetools\Types\Cart\CartSetBillingAddressAction;
use Commercetools\Types\Cart\CartRemoveDiscountCodeAction;
use Commercetools\Types\Cart\CartAddCustomLineItemAction;
use Commercetools\Types\Cart\CartSetLineItemPriceAction;
use Commercetools\Types\Cart\CartSetShippingMethodAction;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxRateAction;
use Commercetools\Types\Cart\CartSetShippingAddressAction;
use Commercetools\Types\Cart\CartSetDeleteDaysAfterLastModificationAction;
use Commercetools\Types\Cart\Cart;
use Commercetools\Types\Cart\CartUpdate;


class CartUpdateBuilder extends BaseBuilder {
    /**
     * @var Cart
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (CartSetShippingMethodTaxRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethodTaxRate(callable $callback = null)
    {
        $action = $this->mapData(CartSetShippingMethodTaxRateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartChangeTaxModeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxMode(callable $callback = null)
    {
        $action = $this->mapData(CartChangeTaxModeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomLineItemTaxAmountAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemTaxAmount(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomLineItemTaxAmountAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartRemoveLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeLineItem(callable $callback = null)
    {
        $action = $this->mapData(CartRemoveLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartRecalculateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function recalculate(callable $callback = null)
    {
        $action = $this->mapData(CartRecalculateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartChangeLineItemQuantityAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLineItemQuantity(callable $callback = null)
    {
        $action = $this->mapData(CartChangeLineItemQuantityAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomLineItemCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomField(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomLineItemCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartChangeTaxCalculationModeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxCalculationMode(callable $callback = null)
    {
        $action = $this->mapData(CartChangeTaxCalculationModeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetLocaleAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale(callable $callback = null)
    {
        $action = $this->mapData(CartSetLocaleAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomLineItemCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomType(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomLineItemCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetLineItemCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomField(callable $callback = null)
    {
        $action = $this->mapData(CartSetLineItemCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetShippingRateInputAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingRateInput(callable $callback = null)
    {
        $action = $this->mapData(CartSetShippingRateInputAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetLineItemTotalPriceAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTotalPrice(callable $callback = null)
    {
        $action = $this->mapData(CartSetLineItemTotalPriceAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartAddLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLineItem(callable $callback = null)
    {
        $action = $this->mapData(CartAddLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomShippingMethodAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomShippingMethod(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomShippingMethodAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomerEmailAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerEmail(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomerEmailAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartAddShoppingListAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addShoppingList(callable $callback = null)
    {
        $action = $this->mapData(CartAddShoppingListAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetShippingMethodTaxAmountAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethodTaxAmount(callable $callback = null)
    {
        $action = $this->mapData(CartSetShippingMethodTaxAmountAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetLineItemTaxRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTaxRate(callable $callback = null)
    {
        $action = $this->mapData(CartSetLineItemTaxRateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCountryAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCountry(callable $callback = null)
    {
        $action = $this->mapData(CartSetCountryAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartAddDiscountCodeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addDiscountCode(callable $callback = null)
    {
        $action = $this->mapData(CartAddDiscountCodeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetAnonymousIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAnonymousId(callable $callback = null)
    {
        $action = $this->mapData(CartSetAnonymousIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCartTotalTaxAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCartTotalTax(callable $callback = null)
    {
        $action = $this->mapData(CartSetCartTotalTaxAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartAddPaymentAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPayment(callable $callback = null)
    {
        $action = $this->mapData(CartAddPaymentAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartRemoveCustomLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeCustomLineItem(callable $callback = null)
    {
        $action = $this->mapData(CartRemoveCustomLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomerIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerId(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomerIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomerGroupAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerGroup(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomerGroupAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartChangeCustomLineItemMoneyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCustomLineItemMoney(callable $callback = null)
    {
        $action = $this->mapData(CartChangeCustomLineItemMoneyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetLineItemTaxAmountAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTaxAmount(callable $callback = null)
    {
        $action = $this->mapData(CartSetLineItemTaxAmountAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartRemovePaymentAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removePayment(callable $callback = null)
    {
        $action = $this->mapData(CartRemovePaymentAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartChangeCustomLineItemQuantityAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCustomLineItemQuantity(callable $callback = null)
    {
        $action = $this->mapData(CartChangeCustomLineItemQuantityAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartChangeTaxRoundingModeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxRoundingMode(callable $callback = null)
    {
        $action = $this->mapData(CartChangeTaxRoundingModeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetLineItemCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomType(callable $callback = null)
    {
        $action = $this->mapData(CartSetLineItemCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetBillingAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setBillingAddress(callable $callback = null)
    {
        $action = $this->mapData(CartSetBillingAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartRemoveDiscountCodeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeDiscountCode(callable $callback = null)
    {
        $action = $this->mapData(CartRemoveDiscountCodeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartAddCustomLineItemAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addCustomLineItem(callable $callback = null)
    {
        $action = $this->mapData(CartAddCustomLineItemAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetLineItemPriceAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemPrice(callable $callback = null)
    {
        $action = $this->mapData(CartSetLineItemPriceAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetShippingMethodAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethod(callable $callback = null)
    {
        $action = $this->mapData(CartSetShippingMethodAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetCustomLineItemTaxRateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemTaxRate(callable $callback = null)
    {
        $action = $this->mapData(CartSetCustomLineItemTaxRateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetShippingAddressAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingAddress(callable $callback = null)
    {
        $action = $this->mapData(CartSetShippingAddressAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (CartSetDeleteDaysAfterLastModificationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(callable $callback = null)
    {
        $action = $this->mapData(CartSetDeleteDaysAfterLastModificationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param CartUpdateAction $action
     * @return $this;
     */
    public function addAction(CartUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        $this->actions[] = $action;
    }

    /**
     * @param Cart $cart
     * @return $this
     */
    public function with(Cart $cart)
    {
        $this->resource = $cart;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build CartUpdate and delete internal state
     * @return CartUpdate
     */
    public function build(): CartUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(CartUpdate::class, $data);
        if ($update instanceof CartUpdate &&
            $this->resource instanceof Cart
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
