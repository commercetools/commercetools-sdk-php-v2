<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
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
     *   function(CartAddCustomLineItemAction $action): CartAddCustomLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addCustomLineItem($action = null)
    {
        $this->addAction($this->resolveAction(CartAddCustomLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param CartAddDiscountCodeAction|callable $action builder function <code>
     *   function(CartAddDiscountCodeAction $action): CartAddDiscountCodeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addDiscountCode($action = null)
    {
        $this->addAction($this->resolveAction(CartAddDiscountCodeAction::class, $action));
        return $this;
    }
    /**
     * @param CartAddLineItemAction|callable $action builder function <code>
     *   function(CartAddLineItemAction $action): CartAddLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLineItem($action = null)
    {
        $this->addAction($this->resolveAction(CartAddLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param CartAddPaymentAction|callable $action builder function <code>
     *   function(CartAddPaymentAction $action): CartAddPaymentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addPayment($action = null)
    {
        $this->addAction($this->resolveAction(CartAddPaymentAction::class, $action));
        return $this;
    }
    /**
     * @param CartAddShoppingListAction|callable $action builder function <code>
     *   function(CartAddShoppingListAction $action): CartAddShoppingListAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addShoppingList($action = null)
    {
        $this->addAction($this->resolveAction(CartAddShoppingListAction::class, $action));
        return $this;
    }
    /**
     * @param CartChangeCustomLineItemMoneyAction|callable $action builder function <code>
     *   function(CartChangeCustomLineItemMoneyAction $action): CartChangeCustomLineItemMoneyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCustomLineItemMoney($action = null)
    {
        $this->addAction($this->resolveAction(CartChangeCustomLineItemMoneyAction::class, $action));
        return $this;
    }
    /**
     * @param CartChangeCustomLineItemQuantityAction|callable $action builder function <code>
     *   function(CartChangeCustomLineItemQuantityAction $action): CartChangeCustomLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCustomLineItemQuantity($action = null)
    {
        $this->addAction($this->resolveAction(CartChangeCustomLineItemQuantityAction::class, $action));
        return $this;
    }
    /**
     * @param CartChangeLineItemQuantityAction|callable $action builder function <code>
     *   function(CartChangeLineItemQuantityAction $action): CartChangeLineItemQuantityAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLineItemQuantity($action = null)
    {
        $this->addAction($this->resolveAction(CartChangeLineItemQuantityAction::class, $action));
        return $this;
    }
    /**
     * @param CartChangeTaxCalculationModeAction|callable $action builder function <code>
     *   function(CartChangeTaxCalculationModeAction $action): CartChangeTaxCalculationModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxCalculationMode($action = null)
    {
        $this->addAction($this->resolveAction(CartChangeTaxCalculationModeAction::class, $action));
        return $this;
    }
    /**
     * @param CartChangeTaxModeAction|callable $action builder function <code>
     *   function(CartChangeTaxModeAction $action): CartChangeTaxModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxMode($action = null)
    {
        $this->addAction($this->resolveAction(CartChangeTaxModeAction::class, $action));
        return $this;
    }
    /**
     * @param CartChangeTaxRoundingModeAction|callable $action builder function <code>
     *   function(CartChangeTaxRoundingModeAction $action): CartChangeTaxRoundingModeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTaxRoundingMode($action = null)
    {
        $this->addAction($this->resolveAction(CartChangeTaxRoundingModeAction::class, $action));
        return $this;
    }
    /**
     * @param CartRecalculateAction|callable $action builder function <code>
     *   function(CartRecalculateAction $action): CartRecalculateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function recalculate($action = null)
    {
        $this->addAction($this->resolveAction(CartRecalculateAction::class, $action));
        return $this;
    }
    /**
     * @param CartRemoveCustomLineItemAction|callable $action builder function <code>
     *   function(CartRemoveCustomLineItemAction $action): CartRemoveCustomLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeCustomLineItem($action = null)
    {
        $this->addAction($this->resolveAction(CartRemoveCustomLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param CartRemoveDiscountCodeAction|callable $action builder function <code>
     *   function(CartRemoveDiscountCodeAction $action): CartRemoveDiscountCodeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeDiscountCode($action = null)
    {
        $this->addAction($this->resolveAction(CartRemoveDiscountCodeAction::class, $action));
        return $this;
    }
    /**
     * @param CartRemoveLineItemAction|callable $action builder function <code>
     *   function(CartRemoveLineItemAction $action): CartRemoveLineItemAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeLineItem($action = null)
    {
        $this->addAction($this->resolveAction(CartRemoveLineItemAction::class, $action));
        return $this;
    }
    /**
     * @param CartRemovePaymentAction|callable $action builder function <code>
     *   function(CartRemovePaymentAction $action): CartRemovePaymentAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removePayment($action = null)
    {
        $this->addAction($this->resolveAction(CartRemovePaymentAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetAnonymousIdAction|callable $action builder function <code>
     *   function(CartSetAnonymousIdAction $action): CartSetAnonymousIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAnonymousId($action = null)
    {
        $this->addAction($this->resolveAction(CartSetAnonymousIdAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetBillingAddressAction|callable $action builder function <code>
     *   function(CartSetBillingAddressAction $action): CartSetBillingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setBillingAddress($action = null)
    {
        $this->addAction($this->resolveAction(CartSetBillingAddressAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCartTotalTaxAction|callable $action builder function <code>
     *   function(CartSetCartTotalTaxAction $action): CartSetCartTotalTaxAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCartTotalTax($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCartTotalTaxAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCountryAction|callable $action builder function <code>
     *   function(CartSetCountryAction $action): CartSetCountryAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCountry($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCountryAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomFieldAction|callable $action builder function <code>
     *   function(CartSetCustomFieldAction $action): CartSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomLineItemCustomFieldAction|callable $action builder function <code>
     *   function(CartSetCustomLineItemCustomFieldAction $action): CartSetCustomLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomField($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomLineItemCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomLineItemCustomTypeAction|callable $action builder function <code>
     *   function(CartSetCustomLineItemCustomTypeAction $action): CartSetCustomLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemCustomType($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomLineItemCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomLineItemTaxAmountAction|callable $action builder function <code>
     *   function(CartSetCustomLineItemTaxAmountAction $action): CartSetCustomLineItemTaxAmountAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemTaxAmount($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomLineItemTaxAmountAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomLineItemTaxRateAction|callable $action builder function <code>
     *   function(CartSetCustomLineItemTaxRateAction $action): CartSetCustomLineItemTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomLineItemTaxRate($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomLineItemTaxRateAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomShippingMethodAction|callable $action builder function <code>
     *   function(CartSetCustomShippingMethodAction $action): CartSetCustomShippingMethodAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomShippingMethod($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomShippingMethodAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomTypeAction|callable $action builder function <code>
     *   function(CartSetCustomTypeAction $action): CartSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomerEmailAction|callable $action builder function <code>
     *   function(CartSetCustomerEmailAction $action): CartSetCustomerEmailAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerEmail($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomerEmailAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomerGroupAction|callable $action builder function <code>
     *   function(CartSetCustomerGroupAction $action): CartSetCustomerGroupAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerGroup($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomerGroupAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetCustomerIdAction|callable $action builder function <code>
     *   function(CartSetCustomerIdAction $action): CartSetCustomerIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomerId($action = null)
    {
        $this->addAction($this->resolveAction(CartSetCustomerIdAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetDeleteDaysAfterLastModificationAction|callable $action builder function <code>
     *   function(CartSetDeleteDaysAfterLastModificationAction $action): CartSetDeleteDaysAfterLastModificationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDeleteDaysAfterLastModification($action = null)
    {
        $this->addAction($this->resolveAction(CartSetDeleteDaysAfterLastModificationAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetLineItemCustomFieldAction|callable $action builder function <code>
     *   function(CartSetLineItemCustomFieldAction $action): CartSetLineItemCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomField($action = null)
    {
        $this->addAction($this->resolveAction(CartSetLineItemCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetLineItemCustomTypeAction|callable $action builder function <code>
     *   function(CartSetLineItemCustomTypeAction $action): CartSetLineItemCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemCustomType($action = null)
    {
        $this->addAction($this->resolveAction(CartSetLineItemCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetLineItemPriceAction|callable $action builder function <code>
     *   function(CartSetLineItemPriceAction $action): CartSetLineItemPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemPrice($action = null)
    {
        $this->addAction($this->resolveAction(CartSetLineItemPriceAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetLineItemTaxAmountAction|callable $action builder function <code>
     *   function(CartSetLineItemTaxAmountAction $action): CartSetLineItemTaxAmountAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTaxAmount($action = null)
    {
        $this->addAction($this->resolveAction(CartSetLineItemTaxAmountAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetLineItemTaxRateAction|callable $action builder function <code>
     *   function(CartSetLineItemTaxRateAction $action): CartSetLineItemTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTaxRate($action = null)
    {
        $this->addAction($this->resolveAction(CartSetLineItemTaxRateAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetLineItemTotalPriceAction|callable $action builder function <code>
     *   function(CartSetLineItemTotalPriceAction $action): CartSetLineItemTotalPriceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLineItemTotalPrice($action = null)
    {
        $this->addAction($this->resolveAction(CartSetLineItemTotalPriceAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetLocaleAction|callable $action builder function <code>
     *   function(CartSetLocaleAction $action): CartSetLocaleAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setLocale($action = null)
    {
        $this->addAction($this->resolveAction(CartSetLocaleAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetShippingAddressAction|callable $action builder function <code>
     *   function(CartSetShippingAddressAction $action): CartSetShippingAddressAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingAddress($action = null)
    {
        $this->addAction($this->resolveAction(CartSetShippingAddressAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetShippingMethodAction|callable $action builder function <code>
     *   function(CartSetShippingMethodAction $action): CartSetShippingMethodAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethod($action = null)
    {
        $this->addAction($this->resolveAction(CartSetShippingMethodAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetShippingMethodTaxAmountAction|callable $action builder function <code>
     *   function(CartSetShippingMethodTaxAmountAction $action): CartSetShippingMethodTaxAmountAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethodTaxAmount($action = null)
    {
        $this->addAction($this->resolveAction(CartSetShippingMethodTaxAmountAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetShippingMethodTaxRateAction|callable $action builder function <code>
     *   function(CartSetShippingMethodTaxRateAction $action): CartSetShippingMethodTaxRateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingMethodTaxRate($action = null)
    {
        $this->addAction($this->resolveAction(CartSetShippingMethodTaxRateAction::class, $action));
        return $this;
    }
    /**
     * @param CartSetShippingRateInputAction|callable $action builder function <code>
     *   function(CartSetShippingRateInputAction $action): CartSetShippingRateInputAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingRateInput($action = null)
    {
        $this->addAction($this->resolveAction(CartSetShippingRateInputAction::class, $action));
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

    private function resolveAction($class, $action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if ($action instanceof $class) {
            return $action;
        }

        throw new BuilderInvalidArgumentException(sprintf('Expected method to be called with or callable to return %s', $class));
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
