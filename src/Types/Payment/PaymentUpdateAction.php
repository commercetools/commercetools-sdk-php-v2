<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface PaymentUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeAmountPlanned' => Types\Payment\PaymentChangeAmountPlannedAction::class,
        'changeTransactionState' => Types\Payment\PaymentChangeTransactionStateAction::class,
        'setInterfaceId' => Types\Payment\PaymentSetInterfaceIdAction::class,
        'setKey' => Types\Payment\PaymentSetKeyAction::class,
        'setStatusInterfaceCode' => Types\Payment\PaymentSetStatusInterfaceCodeAction::class,
        'changeTransactionInteractionId' => Types\Payment\PaymentChangeTransactionInteractionIdAction::class,
        'setMethodInfoInterface' => Types\Payment\PaymentSetMethodInfoInterfaceAction::class,
        'setCustomer' => Types\Payment\PaymentSetCustomerAction::class,
        'addInterfaceInteraction' => Types\Payment\PaymentAddInterfaceInteractionAction::class,
        'addTransaction' => Types\Payment\PaymentAddTransactionAction::class,
        'setMethodInfoName' => Types\Payment\PaymentSetMethodInfoNameAction::class,
        'setCustomType' => Types\Payment\PaymentSetCustomTypeAction::class,
        'setStatusInterfaceText' => Types\Payment\PaymentSetStatusInterfaceTextAction::class,
        'setAmountPaid' => Types\Payment\PaymentSetAmountPaidAction::class,
        'transitionState' => Types\Payment\PaymentTransitionStateAction::class,
        'setCustomField' => Types\Payment\PaymentSetCustomFieldAction::class,
        'setAmountRefunded' => Types\Payment\PaymentSetAmountRefundedAction::class,
        'setMethodInfoMethod' => Types\Payment\PaymentSetMethodInfoMethodAction::class,
        'setAuthorization' => Types\Payment\PaymentSetAuthorizationAction::class,
        'changeTransactionTimestamp' => Types\Payment\PaymentChangeTransactionTimestampAction::class,
        'setExternalId' => Types\Payment\PaymentSetExternalIdAction::class,

    ];

}
