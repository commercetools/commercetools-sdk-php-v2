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
        'addInterfaceInteraction' => Types\Payment\PaymentAddInterfaceInteractionAction::class,
        'changeAmountPlanned' => Types\Payment\PaymentChangeAmountPlannedAction::class,
        'changeTransactionState' => Types\Payment\PaymentChangeTransactionStateAction::class,
        'setCustomer' => Types\Payment\PaymentSetCustomerAction::class,
        'setExternalId' => Types\Payment\PaymentSetExternalIdAction::class,
        'setMethodInfoMethod' => Types\Payment\PaymentSetMethodInfoMethodAction::class,
        'addTransaction' => Types\Payment\PaymentAddTransactionAction::class,
        'setInterfaceId' => Types\Payment\PaymentSetInterfaceIdAction::class,
        'setCustomField' => Types\Payment\PaymentSetCustomFieldAction::class,
        'setStatusInterfaceCode' => Types\Payment\PaymentSetStatusInterfaceCodeAction::class,
        'setMethodInfoInterface' => Types\Payment\PaymentSetMethodInfoInterfaceAction::class,
        'setAuthorization' => Types\Payment\PaymentSetAuthorizationAction::class,
        'setMethodInfoName' => Types\Payment\PaymentSetMethodInfoNameAction::class,
        'setStatusInterfaceText' => Types\Payment\PaymentSetStatusInterfaceTextAction::class,
        'setAmountRefunded' => Types\Payment\PaymentSetAmountRefundedAction::class,
        'setKey' => Types\Payment\PaymentSetKeyAction::class,
        'transitionState' => Types\Payment\PaymentTransitionStateAction::class,
        'setAmountPaid' => Types\Payment\PaymentSetAmountPaidAction::class,
        'changeTransactionTimestamp' => Types\Payment\PaymentChangeTransactionTimestampAction::class,
        'changeTransactionInteractionId' => Types\Payment\PaymentChangeTransactionInteractionIdAction::class,
        'setCustomType' => Types\Payment\PaymentSetCustomTypeAction::class,

    ];

}
