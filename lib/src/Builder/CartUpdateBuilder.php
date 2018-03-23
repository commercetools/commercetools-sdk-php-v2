<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Cart\CartUpdateAction;

use Commercetools\Types\Cart\CartAddCustomLineItemAction;
use Commercetools\Types\Cart\CartAddDiscountCodeAction;
use Commercetools\Types\Cart\CartAddLineItemAction;
use Commercetools\Types\Cart\CartAddPaymentAction;
use Commercetools\Types\Cart\CartAddShoppingListAction;
use Commercetools\Types\Cart\CartChangeCustomLineItemMoneyAction;
use Commercetools\Types\Cart\CartChangeCustomLineItemQuantityAction;
use Commercetools\Types\Cart\CartChangeLineItemQuantityAction;
use Commercetools\Types\Cart\CartChangeTaxCalculationModeAction;
use Commercetools\Types\Cart\CartChangeTaxModeAction;
use Commercetools\Types\Cart\CartChangeTaxRoundingModeAction;
use Commercetools\Types\Cart\CartRecalculateAction;
use Commercetools\Types\Cart\CartRemoveCustomLineItemAction;
use Commercetools\Types\Cart\CartRemoveDiscountCodeAction;
use Commercetools\Types\Cart\CartRemoveLineItemAction;
use Commercetools\Types\Cart\CartRemovePaymentAction;
use Commercetools\Types\Cart\CartSetAnonymousIdAction;
use Commercetools\Types\Cart\CartSetBillingAddressAction;
use Commercetools\Types\Cart\CartSetCartTotalTaxAction;
use Commercetools\Types\Cart\CartSetCountryAction;
use Commercetools\Types\Cart\CartSetCustomFieldAction;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomFieldAction;
use Commercetools\Types\Cart\CartSetCustomLineItemCustomTypeAction;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxAmountAction;
use Commercetools\Types\Cart\CartSetCustomLineItemTaxRateAction;
use Commercetools\Types\Cart\CartSetCustomShippingMethodAction;
use Commercetools\Types\Cart\CartSetCustomTypeAction;
use Commercetools\Types\Cart\CartSetCustomerEmailAction;
use Commercetools\Types\Cart\CartSetCustomerGroupAction;
use Commercetools\Types\Cart\CartSetCustomerIdAction;
use Commercetools\Types\Cart\CartSetDeleteDaysAfterLastModificationAction;
use Commercetools\Types\Cart\CartSetLineItemCustomFieldAction;
use Commercetools\Types\Cart\CartSetLineItemCustomTypeAction;
use Commercetools\Types\Cart\CartSetLineItemPriceAction;
use Commercetools\Types\Cart\CartSetLineItemTaxAmountAction;
use Commercetools\Types\Cart\CartSetLineItemTaxRateAction;
use Commercetools\Types\Cart\CartSetLineItemTotalPriceAction;
use Commercetools\Types\Cart\CartSetLocaleAction;
use Commercetools\Types\Cart\CartSetShippingAddressAction;
use Commercetools\Types\Cart\CartSetShippingMethodAction;
use Commercetools\Types\Cart\CartSetShippingMethodTaxAmountAction;
use Commercetools\Types\Cart\CartSetShippingMethodTaxRateAction;
use Commercetools\Types\Cart\CartSetShippingRateInputAction;
use Commercetools\Types\Cart\Cart;
use Commercetools\Types\Cart\CartUpdate;
use Commercetools\Request\ByProjectKeyCartsByIDPost;


class CartUpdateBuilder extends BaseBuilder {
    /**
     * @var Cart
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    private $requestBuilderCallback;

    public function __construct(callable $requestBuilderCallback = null)
    {
        $this->requestBuilderCallback = $requestBuilderCallback;
    }

    /**
     * @param CartAddCustomLineItemAction|callable $action builder function <code>
     *   function (CartAddCustomLineItemAction $action): CartAddCustomLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addCustomLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartAddCustomLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartAddCustomLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartAddDiscountCodeAction|callable $action builder function <code>
     *   function (CartAddDiscountCodeAction $action): CartAddDiscountCodeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addDiscountCode($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartAddDiscountCodeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartAddDiscountCodeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartAddLineItemAction|callable $action builder function <code>
     *   function (CartAddLineItemAction $action): CartAddLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartAddLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartAddLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartAddPaymentAction|callable $action builder function <code>
     *   function (CartAddPaymentAction $action): CartAddPaymentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPayment($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartAddPaymentAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartAddPaymentAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartAddShoppingListAction|callable $action builder function <code>
     *   function (CartAddShoppingListAction $action): CartAddShoppingListAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addShoppingList($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartAddShoppingListAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartAddShoppingListAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartChangeCustomLineItemMoneyAction|callable $action builder function <code>
     *   function (CartChangeCustomLineItemMoneyAction $action): CartChangeCustomLineItemMoneyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCustomLineItemMoney($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartChangeCustomLineItemMoneyAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartChangeCustomLineItemMoneyAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartChangeCustomLineItemQuantityAction|callable $action builder function <code>
     *   function (CartChangeCustomLineItemQuantityAction $action): CartChangeCustomLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCustomLineItemQuantity($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartChangeCustomLineItemQuantityAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartChangeCustomLineItemQuantityAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartChangeLineItemQuantityAction|callable $action builder function <code>
     *   function (CartChangeLineItemQuantityAction $action): CartChangeLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLineItemQuantity($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartChangeLineItemQuantityAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartChangeLineItemQuantityAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartChangeTaxCalculationModeAction|callable $action builder function <code>
     *   function (CartChangeTaxCalculationModeAction $action): CartChangeTaxCalculationModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxCalculationMode($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartChangeTaxCalculationModeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartChangeTaxCalculationModeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartChangeTaxModeAction|callable $action builder function <code>
     *   function (CartChangeTaxModeAction $action): CartChangeTaxModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxMode($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartChangeTaxModeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartChangeTaxModeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartChangeTaxRoundingModeAction|callable $action builder function <code>
     *   function (CartChangeTaxRoundingModeAction $action): CartChangeTaxRoundingModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxRoundingMode($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartChangeTaxRoundingModeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartChangeTaxRoundingModeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartRecalculateAction|callable $action builder function <code>
     *   function (CartRecalculateAction $action): CartRecalculateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function recalculate($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartRecalculateAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartRecalculateAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartRemoveCustomLineItemAction|callable $action builder function <code>
     *   function (CartRemoveCustomLineItemAction $action): CartRemoveCustomLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeCustomLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartRemoveCustomLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartRemoveCustomLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartRemoveDiscountCodeAction|callable $action builder function <code>
     *   function (CartRemoveDiscountCodeAction $action): CartRemoveDiscountCodeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeDiscountCode($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartRemoveDiscountCodeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartRemoveDiscountCodeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartRemoveLineItemAction|callable $action builder function <code>
     *   function (CartRemoveLineItemAction $action): CartRemoveLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeLineItem($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartRemoveLineItemAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartRemoveLineItemAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartRemovePaymentAction|callable $action builder function <code>
     *   function (CartRemovePaymentAction $action): CartRemovePaymentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removePayment($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartRemovePaymentAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartRemovePaymentAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetAnonymousIdAction|callable $action builder function <code>
     *   function (CartSetAnonymousIdAction $action): CartSetAnonymousIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAnonymousId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetAnonymousIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetAnonymousIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetBillingAddressAction|callable $action builder function <code>
     *   function (CartSetBillingAddressAction $action): CartSetBillingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setBillingAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetBillingAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetBillingAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCartTotalTaxAction|callable $action builder function <code>
     *   function (CartSetCartTotalTaxAction $action): CartSetCartTotalTaxAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCartTotalTax($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCartTotalTaxAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCartTotalTaxAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCountryAction|callable $action builder function <code>
     *   function (CartSetCountryAction $action): CartSetCountryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCountry($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCountryAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCountryAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomFieldAction|callable $action builder function <code>
     *   function (CartSetCustomFieldAction $action): CartSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomLineItemCustomFieldAction|callable $action builder function <code>
     *   function (CartSetCustomLineItemCustomFieldAction $action): CartSetCustomLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomLineItemCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomLineItemCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomLineItemCustomTypeAction|callable $action builder function <code>
     *   function (CartSetCustomLineItemCustomTypeAction $action): CartSetCustomLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomLineItemCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomLineItemCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomLineItemTaxAmountAction|callable $action builder function <code>
     *   function (CartSetCustomLineItemTaxAmountAction $action): CartSetCustomLineItemTaxAmountAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemTaxAmount($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomLineItemTaxAmountAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomLineItemTaxAmountAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomLineItemTaxRateAction|callable $action builder function <code>
     *   function (CartSetCustomLineItemTaxRateAction $action): CartSetCustomLineItemTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemTaxRate($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomLineItemTaxRateAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomLineItemTaxRateAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomShippingMethodAction|callable $action builder function <code>
     *   function (CartSetCustomShippingMethodAction $action): CartSetCustomShippingMethodAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomShippingMethod($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomShippingMethodAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomShippingMethodAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomTypeAction|callable $action builder function <code>
     *   function (CartSetCustomTypeAction $action): CartSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomerEmailAction|callable $action builder function <code>
     *   function (CartSetCustomerEmailAction $action): CartSetCustomerEmailAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerEmail($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomerEmailAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomerEmailAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomerGroupAction|callable $action builder function <code>
     *   function (CartSetCustomerGroupAction $action): CartSetCustomerGroupAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerGroup($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomerGroupAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomerGroupAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetCustomerIdAction|callable $action builder function <code>
     *   function (CartSetCustomerIdAction $action): CartSetCustomerIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerId($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetCustomerIdAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetCustomerIdAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetDeleteDaysAfterLastModificationAction|callable $action builder function <code>
     *   function (CartSetDeleteDaysAfterLastModificationAction $action): CartSetDeleteDaysAfterLastModificationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeleteDaysAfterLastModification($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetDeleteDaysAfterLastModificationAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetDeleteDaysAfterLastModificationAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetLineItemCustomFieldAction|callable $action builder function <code>
     *   function (CartSetLineItemCustomFieldAction $action): CartSetLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomField($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetLineItemCustomFieldAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetLineItemCustomFieldAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetLineItemCustomTypeAction|callable $action builder function <code>
     *   function (CartSetLineItemCustomTypeAction $action): CartSetLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomType($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetLineItemCustomTypeAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetLineItemCustomTypeAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetLineItemPriceAction|callable $action builder function <code>
     *   function (CartSetLineItemPriceAction $action): CartSetLineItemPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemPrice($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetLineItemPriceAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetLineItemPriceAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetLineItemTaxAmountAction|callable $action builder function <code>
     *   function (CartSetLineItemTaxAmountAction $action): CartSetLineItemTaxAmountAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTaxAmount($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetLineItemTaxAmountAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetLineItemTaxAmountAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetLineItemTaxRateAction|callable $action builder function <code>
     *   function (CartSetLineItemTaxRateAction $action): CartSetLineItemTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTaxRate($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetLineItemTaxRateAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetLineItemTaxRateAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetLineItemTotalPriceAction|callable $action builder function <code>
     *   function (CartSetLineItemTotalPriceAction $action): CartSetLineItemTotalPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTotalPrice($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetLineItemTotalPriceAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetLineItemTotalPriceAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetLocaleAction|callable $action builder function <code>
     *   function (CartSetLocaleAction $action): CartSetLocaleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetLocaleAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetLocaleAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetShippingAddressAction|callable $action builder function <code>
     *   function (CartSetShippingAddressAction $action): CartSetShippingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingAddress($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetShippingAddressAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetShippingAddressAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetShippingMethodAction|callable $action builder function <code>
     *   function (CartSetShippingMethodAction $action): CartSetShippingMethodAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethod($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetShippingMethodAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetShippingMethodAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetShippingMethodTaxAmountAction|callable $action builder function <code>
     *   function (CartSetShippingMethodTaxAmountAction $action): CartSetShippingMethodTaxAmountAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethodTaxAmount($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetShippingMethodTaxAmountAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetShippingMethodTaxAmountAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetShippingMethodTaxRateAction|callable $action builder function <code>
     *   function (CartSetShippingMethodTaxRateAction $action): CartSetShippingMethodTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethodTaxRate($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetShippingMethodTaxRateAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetShippingMethodTaxRateAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param CartSetShippingRateInputAction|callable $action builder function <code>
     *   function (CartSetShippingRateInputAction $action): CartSetShippingRateInputAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingRateInput($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(CartSetShippingRateInputAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof CartSetShippingRateInputAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
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
        return $action;
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

    public function getResource(): ?Cart
    {
        return $this->resource;
    }

    /**
     * Build CartUpdate
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

    public function buildRequest(): ?ByProjectKeyCartsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
