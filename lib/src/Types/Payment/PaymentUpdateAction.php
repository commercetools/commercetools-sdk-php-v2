<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface PaymentUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addInterfaceInteraction' => Types\Payment\PaymentAddInterfaceInteractionAction::class,
        'addTransaction' => Types\Payment\PaymentAddTransactionAction::class,
        'changeAmountPlanned' => Types\Payment\PaymentChangeAmountPlannedAction::class,
        'changeTransactionInteractionId' => Types\Payment\PaymentChangeTransactionInteractionIdAction::class,
        'changeTransactionState' => Types\Payment\PaymentChangeTransactionStateAction::class,
        'changeTransactionTimestamp' => Types\Payment\PaymentChangeTransactionTimestampAction::class,
        'setAmountPaid' => Types\Payment\PaymentSetAmountPaidAction::class,
        'setAmountRefunded' => Types\Payment\PaymentSetAmountRefundedAction::class,
        'setAuthorization' => Types\Payment\PaymentSetAuthorizationAction::class,
        'setCustomField' => Types\Payment\PaymentSetCustomFieldAction::class,
        'setCustomType' => Types\Payment\PaymentSetCustomTypeAction::class,
        'setCustomer' => Types\Payment\PaymentSetCustomerAction::class,
        'setExternalId' => Types\Payment\PaymentSetExternalIdAction::class,
        'setInterfaceId' => Types\Payment\PaymentSetInterfaceIdAction::class,
        'setKey' => Types\Payment\PaymentSetKeyAction::class,
        'setMethodInfoInterface' => Types\Payment\PaymentSetMethodInfoInterfaceAction::class,
        'setMethodInfoMethod' => Types\Payment\PaymentSetMethodInfoMethodAction::class,
        'setMethodInfoName' => Types\Payment\PaymentSetMethodInfoNameAction::class,
        'setStatusInterfaceCode' => Types\Payment\PaymentSetStatusInterfaceCodeAction::class,
        'setStatusInterfaceText' => Types\Payment\PaymentSetStatusInterfaceTextAction::class,
        'transitionState' => Types\Payment\PaymentTransitionStateAction::class,

    ];

}
