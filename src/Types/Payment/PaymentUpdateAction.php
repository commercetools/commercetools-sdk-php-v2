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
        'changeTransactionInteractionId' => Types\Payment\PaymentChangeTransactionInteractionIdAction::class,
        'changeTransactionTimestamp' => Types\Payment\PaymentChangeTransactionTimestampAction::class,
        'setAmountPaid' => Types\Payment\PaymentSetAmountPaidAction::class,
        'setKey' => Types\Payment\PaymentSetKeyAction::class,
        'setMethodInfoInterface' => Types\Payment\PaymentSetMethodInfoInterfaceAction::class,
        'setStatusInterfaceText' => Types\Payment\PaymentSetStatusInterfaceTextAction::class,
        'changeTransactionState' => Types\Payment\PaymentChangeTransactionStateAction::class,
        'setMethodInfoMethod' => Types\Payment\PaymentSetMethodInfoMethodAction::class,
        'setExternalId' => Types\Payment\PaymentSetExternalIdAction::class,
        'addTransaction' => Types\Payment\PaymentAddTransactionAction::class,
        'changeAmountPlanned' => Types\Payment\PaymentChangeAmountPlannedAction::class,
        'transitionState' => Types\Payment\PaymentTransitionStateAction::class,
        'setStatusInterfaceCode' => Types\Payment\PaymentSetStatusInterfaceCodeAction::class,
        'setCustomer' => Types\Payment\PaymentSetCustomerAction::class,
        'setAmountRefunded' => Types\Payment\PaymentSetAmountRefundedAction::class,
        'setCustomType' => Types\Payment\PaymentSetCustomTypeAction::class,
        'setAuthorization' => Types\Payment\PaymentSetAuthorizationAction::class,
        'addInterfaceInteraction' => Types\Payment\PaymentAddInterfaceInteractionAction::class,
        'setMethodInfoName' => Types\Payment\PaymentSetMethodInfoNameAction::class,
        'setCustomField' => Types\Payment\PaymentSetCustomFieldAction::class,
        'setInterfaceId' => Types\Payment\PaymentSetInterfaceIdAction::class,

    ];

}
