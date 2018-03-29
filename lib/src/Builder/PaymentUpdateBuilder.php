<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateAction;

use Commercetools\Types\Payment\PaymentAddInterfaceInteractionAction;
use Commercetools\Types\Payment\PaymentAddTransactionAction;
use Commercetools\Types\Payment\PaymentChangeAmountPlannedAction;
use Commercetools\Types\Payment\PaymentChangeTransactionInteractionIdAction;
use Commercetools\Types\Payment\PaymentChangeTransactionStateAction;
use Commercetools\Types\Payment\PaymentChangeTransactionTimestampAction;
use Commercetools\Types\Payment\PaymentSetAmountPaidAction;
use Commercetools\Types\Payment\PaymentSetAmountRefundedAction;
use Commercetools\Types\Payment\PaymentSetAuthorizationAction;
use Commercetools\Types\Payment\PaymentSetCustomFieldAction;
use Commercetools\Types\Payment\PaymentSetCustomTypeAction;
use Commercetools\Types\Payment\PaymentSetCustomerAction;
use Commercetools\Types\Payment\PaymentSetExternalIdAction;
use Commercetools\Types\Payment\PaymentSetInterfaceIdAction;
use Commercetools\Types\Payment\PaymentSetKeyAction;
use Commercetools\Types\Payment\PaymentSetMethodInfoInterfaceAction;
use Commercetools\Types\Payment\PaymentSetMethodInfoMethodAction;
use Commercetools\Types\Payment\PaymentSetMethodInfoNameAction;
use Commercetools\Types\Payment\PaymentSetStatusInterfaceCodeAction;
use Commercetools\Types\Payment\PaymentSetStatusInterfaceTextAction;
use Commercetools\Types\Payment\PaymentTransitionStateAction;
use Commercetools\Types\Payment\Payment;
use Commercetools\Types\Payment\PaymentUpdate;
use Commercetools\Request\ByProjectKeyPaymentsByIDPost;


class PaymentUpdateBuilder extends BaseBuilder {
    /**
     * @var Payment
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
     * @param PaymentAddInterfaceInteractionAction|callable $action builder function <code>
     *   function(PaymentAddInterfaceInteractionAction $action): PaymentAddInterfaceInteractionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addInterfaceInteraction($action = null)
    {
        $this->addAction($this->resolveAction(PaymentAddInterfaceInteractionAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentAddTransactionAction|callable $action builder function <code>
     *   function(PaymentAddTransactionAction $action): PaymentAddTransactionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addTransaction($action = null)
    {
        $this->addAction($this->resolveAction(PaymentAddTransactionAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentChangeAmountPlannedAction|callable $action builder function <code>
     *   function(PaymentChangeAmountPlannedAction $action): PaymentChangeAmountPlannedAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAmountPlanned($action = null)
    {
        $this->addAction($this->resolveAction(PaymentChangeAmountPlannedAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentChangeTransactionInteractionIdAction|callable $action builder function <code>
     *   function(PaymentChangeTransactionInteractionIdAction $action): PaymentChangeTransactionInteractionIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTransactionInteractionId($action = null)
    {
        $this->addAction($this->resolveAction(PaymentChangeTransactionInteractionIdAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentChangeTransactionStateAction|callable $action builder function <code>
     *   function(PaymentChangeTransactionStateAction $action): PaymentChangeTransactionStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTransactionState($action = null)
    {
        $this->addAction($this->resolveAction(PaymentChangeTransactionStateAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentChangeTransactionTimestampAction|callable $action builder function <code>
     *   function(PaymentChangeTransactionTimestampAction $action): PaymentChangeTransactionTimestampAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTransactionTimestamp($action = null)
    {
        $this->addAction($this->resolveAction(PaymentChangeTransactionTimestampAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetAmountPaidAction|callable $action builder function <code>
     *   function(PaymentSetAmountPaidAction $action): PaymentSetAmountPaidAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAmountPaid($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetAmountPaidAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetAmountRefundedAction|callable $action builder function <code>
     *   function(PaymentSetAmountRefundedAction $action): PaymentSetAmountRefundedAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAmountRefunded($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetAmountRefundedAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetAuthorizationAction|callable $action builder function <code>
     *   function(PaymentSetAuthorizationAction $action): PaymentSetAuthorizationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAuthorization($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetAuthorizationAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetCustomFieldAction|callable $action builder function <code>
     *   function(PaymentSetCustomFieldAction $action): PaymentSetCustomFieldAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetCustomFieldAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetCustomTypeAction|callable $action builder function <code>
     *   function(PaymentSetCustomTypeAction $action): PaymentSetCustomTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetCustomTypeAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetCustomerAction|callable $action builder function <code>
     *   function(PaymentSetCustomerAction $action): PaymentSetCustomerAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomer($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetCustomerAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetExternalIdAction|callable $action builder function <code>
     *   function(PaymentSetExternalIdAction $action): PaymentSetExternalIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExternalId($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetExternalIdAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetInterfaceIdAction|callable $action builder function <code>
     *   function(PaymentSetInterfaceIdAction $action): PaymentSetInterfaceIdAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setInterfaceId($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetInterfaceIdAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetKeyAction|callable $action builder function <code>
     *   function(PaymentSetKeyAction $action): PaymentSetKeyAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetKeyAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetMethodInfoInterfaceAction|callable $action builder function <code>
     *   function(PaymentSetMethodInfoInterfaceAction $action): PaymentSetMethodInfoInterfaceAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMethodInfoInterface($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetMethodInfoInterfaceAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetMethodInfoMethodAction|callable $action builder function <code>
     *   function(PaymentSetMethodInfoMethodAction $action): PaymentSetMethodInfoMethodAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMethodInfoMethod($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetMethodInfoMethodAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetMethodInfoNameAction|callable $action builder function <code>
     *   function(PaymentSetMethodInfoNameAction $action): PaymentSetMethodInfoNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMethodInfoName($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetMethodInfoNameAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetStatusInterfaceCodeAction|callable $action builder function <code>
     *   function(PaymentSetStatusInterfaceCodeAction $action): PaymentSetStatusInterfaceCodeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setStatusInterfaceCode($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetStatusInterfaceCodeAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentSetStatusInterfaceTextAction|callable $action builder function <code>
     *   function(PaymentSetStatusInterfaceTextAction $action): PaymentSetStatusInterfaceTextAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setStatusInterfaceText($action = null)
    {
        $this->addAction($this->resolveAction(PaymentSetStatusInterfaceTextAction::class, $action));
        return $this;
    }
    /**
     * @param PaymentTransitionStateAction|callable $action builder function <code>
     *   function(PaymentTransitionStateAction $action): PaymentTransitionStateAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState($action = null)
    {
        $this->addAction($this->resolveAction(PaymentTransitionStateAction::class, $action));
        return $this;
    }

    /**
     * @param PaymentUpdateAction $action
     * @return $this;
     */
    public function addAction(PaymentUpdateAction $action)
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
     * @param Payment $payment
     * @return $this
     */
    public function with(Payment $payment)
    {
        $this->resource = $payment;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Payment
    {
        return $this->resource;
    }

    /**
     * Build PaymentUpdate
     * @return PaymentUpdate
     */
    public function build(): PaymentUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(PaymentUpdate::class, $data);
        if ($update instanceof PaymentUpdate &&
            $this->resource instanceof Payment
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyPaymentsByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
