<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\PaymentUpdateBuilder;
use Commercetools\Exception\InvalidArgumentException;
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

use Commercetools\Types\Payment\PaymentAddInterfaceInteractionActionModel;
use Commercetools\Types\Payment\PaymentAddTransactionActionModel;
use Commercetools\Types\Payment\PaymentChangeAmountPlannedActionModel;
use Commercetools\Types\Payment\PaymentChangeTransactionInteractionIdActionModel;
use Commercetools\Types\Payment\PaymentChangeTransactionStateActionModel;
use Commercetools\Types\Payment\PaymentChangeTransactionTimestampActionModel;
use Commercetools\Types\Payment\PaymentSetAmountPaidActionModel;
use Commercetools\Types\Payment\PaymentSetAmountRefundedActionModel;
use Commercetools\Types\Payment\PaymentSetAuthorizationActionModel;
use Commercetools\Types\Payment\PaymentSetCustomFieldActionModel;
use Commercetools\Types\Payment\PaymentSetCustomTypeActionModel;
use Commercetools\Types\Payment\PaymentSetCustomerActionModel;
use Commercetools\Types\Payment\PaymentSetExternalIdActionModel;
use Commercetools\Types\Payment\PaymentSetInterfaceIdActionModel;
use Commercetools\Types\Payment\PaymentSetKeyActionModel;
use Commercetools\Types\Payment\PaymentSetMethodInfoInterfaceActionModel;
use Commercetools\Types\Payment\PaymentSetMethodInfoMethodActionModel;
use Commercetools\Types\Payment\PaymentSetMethodInfoNameActionModel;
use Commercetools\Types\Payment\PaymentSetStatusInterfaceCodeActionModel;
use Commercetools\Types\Payment\PaymentSetStatusInterfaceTextActionModel;
use Commercetools\Types\Payment\PaymentTransitionStateActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Payment\PaymentModel;


class PaymentBuilderTest extends TestCase {
    public function testAddInterfaceInteractionCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->addInterfaceInteraction(function($action) { static::assertInstanceOf(PaymentAddInterfaceInteractionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentAddInterfaceInteractionAction::class, $update->getActions()->current());
    }

    public function testAddInterfaceInteractionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->addInterfaceInteraction(function($action) { static::assertInstanceOf(PaymentAddInterfaceInteractionAction::class, $action); return []; });
    }

    public function testAddInterfaceInteractionInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->addInterfaceInteraction(new PaymentAddInterfaceInteractionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentAddInterfaceInteractionAction::class, $update->getActions()->current());
    }

    public function testAddInterfaceInteractionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->addInterfaceInteraction([]);
    }

    public function testAddTransactionCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->addTransaction(function($action) { static::assertInstanceOf(PaymentAddTransactionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentAddTransactionAction::class, $update->getActions()->current());
    }

    public function testAddTransactionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->addTransaction(function($action) { static::assertInstanceOf(PaymentAddTransactionAction::class, $action); return []; });
    }

    public function testAddTransactionInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->addTransaction(new PaymentAddTransactionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentAddTransactionAction::class, $update->getActions()->current());
    }

    public function testAddTransactionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->addTransaction([]);
    }

    public function testChangeAmountPlannedCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeAmountPlanned(function($action) { static::assertInstanceOf(PaymentChangeAmountPlannedAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeAmountPlannedAction::class, $update->getActions()->current());
    }

    public function testChangeAmountPlannedInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeAmountPlanned(function($action) { static::assertInstanceOf(PaymentChangeAmountPlannedAction::class, $action); return []; });
    }

    public function testChangeAmountPlannedInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeAmountPlanned(new PaymentChangeAmountPlannedActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeAmountPlannedAction::class, $update->getActions()->current());
    }

    public function testChangeAmountPlannedInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeAmountPlanned([]);
    }

    public function testChangeTransactionInteractionIdCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionInteractionId(function($action) { static::assertInstanceOf(PaymentChangeTransactionInteractionIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeTransactionInteractionIdAction::class, $update->getActions()->current());
    }

    public function testChangeTransactionInteractionIdInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionInteractionId(function($action) { static::assertInstanceOf(PaymentChangeTransactionInteractionIdAction::class, $action); return []; });
    }

    public function testChangeTransactionInteractionIdInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionInteractionId(new PaymentChangeTransactionInteractionIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeTransactionInteractionIdAction::class, $update->getActions()->current());
    }

    public function testChangeTransactionInteractionIdInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionInteractionId([]);
    }

    public function testChangeTransactionStateCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionState(function($action) { static::assertInstanceOf(PaymentChangeTransactionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeTransactionStateAction::class, $update->getActions()->current());
    }

    public function testChangeTransactionStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionState(function($action) { static::assertInstanceOf(PaymentChangeTransactionStateAction::class, $action); return []; });
    }

    public function testChangeTransactionStateInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionState(new PaymentChangeTransactionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeTransactionStateAction::class, $update->getActions()->current());
    }

    public function testChangeTransactionStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionState([]);
    }

    public function testChangeTransactionTimestampCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionTimestamp(function($action) { static::assertInstanceOf(PaymentChangeTransactionTimestampAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeTransactionTimestampAction::class, $update->getActions()->current());
    }

    public function testChangeTransactionTimestampInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionTimestamp(function($action) { static::assertInstanceOf(PaymentChangeTransactionTimestampAction::class, $action); return []; });
    }

    public function testChangeTransactionTimestampInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionTimestamp(new PaymentChangeTransactionTimestampActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentChangeTransactionTimestampAction::class, $update->getActions()->current());
    }

    public function testChangeTransactionTimestampInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->changeTransactionTimestamp([]);
    }

    public function testSetAmountPaidCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountPaid(function($action) { static::assertInstanceOf(PaymentSetAmountPaidAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetAmountPaidAction::class, $update->getActions()->current());
    }

    public function testSetAmountPaidInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountPaid(function($action) { static::assertInstanceOf(PaymentSetAmountPaidAction::class, $action); return []; });
    }

    public function testSetAmountPaidInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountPaid(new PaymentSetAmountPaidActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetAmountPaidAction::class, $update->getActions()->current());
    }

    public function testSetAmountPaidInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountPaid([]);
    }

    public function testSetAmountRefundedCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountRefunded(function($action) { static::assertInstanceOf(PaymentSetAmountRefundedAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetAmountRefundedAction::class, $update->getActions()->current());
    }

    public function testSetAmountRefundedInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountRefunded(function($action) { static::assertInstanceOf(PaymentSetAmountRefundedAction::class, $action); return []; });
    }

    public function testSetAmountRefundedInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountRefunded(new PaymentSetAmountRefundedActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetAmountRefundedAction::class, $update->getActions()->current());
    }

    public function testSetAmountRefundedInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setAmountRefunded([]);
    }

    public function testSetAuthorizationCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setAuthorization(function($action) { static::assertInstanceOf(PaymentSetAuthorizationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetAuthorizationAction::class, $update->getActions()->current());
    }

    public function testSetAuthorizationInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setAuthorization(function($action) { static::assertInstanceOf(PaymentSetAuthorizationAction::class, $action); return []; });
    }

    public function testSetAuthorizationInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setAuthorization(new PaymentSetAuthorizationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetAuthorizationAction::class, $update->getActions()->current());
    }

    public function testSetAuthorizationInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setAuthorization([]);
    }

    public function testSetCustomFieldCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(PaymentSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(PaymentSetCustomFieldAction::class, $action); return []; });
    }

    public function testSetCustomFieldInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomField(new PaymentSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomField([]);
    }

    public function testSetCustomTypeCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(PaymentSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(PaymentSetCustomTypeAction::class, $action); return []; });
    }

    public function testSetCustomTypeInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomType(new PaymentSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomType([]);
    }

    public function testSetCustomerCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomer(function($action) { static::assertInstanceOf(PaymentSetCustomerAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetCustomerInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomer(function($action) { static::assertInstanceOf(PaymentSetCustomerAction::class, $action); return []; });
    }

    public function testSetCustomerInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomer(new PaymentSetCustomerActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetCustomerInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setCustomer([]);
    }

    public function testSetExternalIdCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setExternalId(function($action) { static::assertInstanceOf(PaymentSetExternalIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setExternalId(function($action) { static::assertInstanceOf(PaymentSetExternalIdAction::class, $action); return []; });
    }

    public function testSetExternalIdInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setExternalId(new PaymentSetExternalIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setExternalId([]);
    }

    public function testSetInterfaceIdCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setInterfaceId(function($action) { static::assertInstanceOf(PaymentSetInterfaceIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetInterfaceIdAction::class, $update->getActions()->current());
    }

    public function testSetInterfaceIdInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setInterfaceId(function($action) { static::assertInstanceOf(PaymentSetInterfaceIdAction::class, $action); return []; });
    }

    public function testSetInterfaceIdInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setInterfaceId(new PaymentSetInterfaceIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetInterfaceIdAction::class, $update->getActions()->current());
    }

    public function testSetInterfaceIdInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setInterfaceId([]);
    }

    public function testSetKeyCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(PaymentSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(PaymentSetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setKey(new PaymentSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setKey([]);
    }

    public function testSetMethodInfoInterfaceCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoInterface(function($action) { static::assertInstanceOf(PaymentSetMethodInfoInterfaceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetMethodInfoInterfaceAction::class, $update->getActions()->current());
    }

    public function testSetMethodInfoInterfaceInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoInterface(function($action) { static::assertInstanceOf(PaymentSetMethodInfoInterfaceAction::class, $action); return []; });
    }

    public function testSetMethodInfoInterfaceInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoInterface(new PaymentSetMethodInfoInterfaceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetMethodInfoInterfaceAction::class, $update->getActions()->current());
    }

    public function testSetMethodInfoInterfaceInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoInterface([]);
    }

    public function testSetMethodInfoMethodCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoMethod(function($action) { static::assertInstanceOf(PaymentSetMethodInfoMethodAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetMethodInfoMethodAction::class, $update->getActions()->current());
    }

    public function testSetMethodInfoMethodInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoMethod(function($action) { static::assertInstanceOf(PaymentSetMethodInfoMethodAction::class, $action); return []; });
    }

    public function testSetMethodInfoMethodInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoMethod(new PaymentSetMethodInfoMethodActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetMethodInfoMethodAction::class, $update->getActions()->current());
    }

    public function testSetMethodInfoMethodInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoMethod([]);
    }

    public function testSetMethodInfoNameCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoName(function($action) { static::assertInstanceOf(PaymentSetMethodInfoNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetMethodInfoNameAction::class, $update->getActions()->current());
    }

    public function testSetMethodInfoNameInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoName(function($action) { static::assertInstanceOf(PaymentSetMethodInfoNameAction::class, $action); return []; });
    }

    public function testSetMethodInfoNameInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoName(new PaymentSetMethodInfoNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetMethodInfoNameAction::class, $update->getActions()->current());
    }

    public function testSetMethodInfoNameInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setMethodInfoName([]);
    }

    public function testSetStatusInterfaceCodeCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceCode(function($action) { static::assertInstanceOf(PaymentSetStatusInterfaceCodeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetStatusInterfaceCodeAction::class, $update->getActions()->current());
    }

    public function testSetStatusInterfaceCodeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceCode(function($action) { static::assertInstanceOf(PaymentSetStatusInterfaceCodeAction::class, $action); return []; });
    }

    public function testSetStatusInterfaceCodeInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceCode(new PaymentSetStatusInterfaceCodeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetStatusInterfaceCodeAction::class, $update->getActions()->current());
    }

    public function testSetStatusInterfaceCodeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceCode([]);
    }

    public function testSetStatusInterfaceTextCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceText(function($action) { static::assertInstanceOf(PaymentSetStatusInterfaceTextAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetStatusInterfaceTextAction::class, $update->getActions()->current());
    }

    public function testSetStatusInterfaceTextInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceText(function($action) { static::assertInstanceOf(PaymentSetStatusInterfaceTextAction::class, $action); return []; });
    }

    public function testSetStatusInterfaceTextInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceText(new PaymentSetStatusInterfaceTextActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentSetStatusInterfaceTextAction::class, $update->getActions()->current());
    }

    public function testSetStatusInterfaceTextInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->setStatusInterfaceText([]);
    }

    public function testTransitionStateCallback() {
        $builder = new PaymentUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(PaymentTransitionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(PaymentTransitionStateAction::class, $action); return []; });
    }

    public function testTransitionStateInstance() {
        $builder = new PaymentUpdateBuilder();
        $builder->transitionState(new PaymentTransitionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new PaymentUpdateBuilder();
        $builder->transitionState([]);
    }


    public function testReset() {
        $builder = new PaymentUpdateBuilder();
        $builder->addInterfaceInteraction(new PaymentAddInterfaceInteractionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertInstanceOf(PaymentAddInterfaceInteractionAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new PaymentUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new PaymentModel());
        static::assertInstanceOf(Payment::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new PaymentUpdateBuilder();
        $builder->with(new PaymentModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(PaymentUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
