<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
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
     * @param callable $callback builder function <code>
     *   function (PaymentAddInterfaceInteractionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addInterfaceInteraction(callable $callback = null)
    {
        $action = $this->mapData(PaymentAddInterfaceInteractionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentAddTransactionAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addTransaction(callable $callback = null)
    {
        $action = $this->mapData(PaymentAddTransactionAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentChangeAmountPlannedAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeAmountPlanned(callable $callback = null)
    {
        $action = $this->mapData(PaymentChangeAmountPlannedAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentChangeTransactionInteractionIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTransactionInteractionId(callable $callback = null)
    {
        $action = $this->mapData(PaymentChangeTransactionInteractionIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentChangeTransactionStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTransactionState(callable $callback = null)
    {
        $action = $this->mapData(PaymentChangeTransactionStateAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentChangeTransactionTimestampAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeTransactionTimestamp(callable $callback = null)
    {
        $action = $this->mapData(PaymentChangeTransactionTimestampAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetAmountPaidAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAmountPaid(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetAmountPaidAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetAmountRefundedAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAmountRefunded(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetAmountRefundedAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetAuthorizationAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setAuthorization(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetAuthorizationAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetCustomFieldAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomField(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetCustomFieldAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetCustomTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomType(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetCustomTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetCustomerAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setCustomer(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetCustomerAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetExternalIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setExternalId(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetExternalIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetInterfaceIdAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setInterfaceId(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetInterfaceIdAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetKeyAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setKey(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetKeyAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetMethodInfoInterfaceAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMethodInfoInterface(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetMethodInfoInterfaceAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetMethodInfoMethodAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMethodInfoMethod(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetMethodInfoMethodAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetMethodInfoNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setMethodInfoName(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetMethodInfoNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetStatusInterfaceCodeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setStatusInterfaceCode(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetStatusInterfaceCodeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentSetStatusInterfaceTextAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setStatusInterfaceText(callable $callback = null)
    {
        $action = $this->mapData(PaymentSetStatusInterfaceTextAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (PaymentTransitionStateAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function transitionState(callable $callback = null)
    {
        $action = $this->mapData(PaymentTransitionStateAction::class, null);
        $this->callback($action, $callback);
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
