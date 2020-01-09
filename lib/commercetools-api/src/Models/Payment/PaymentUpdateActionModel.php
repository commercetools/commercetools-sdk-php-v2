<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentUpdateActionModel extends JsonObjectModel implements PaymentUpdateAction
{
    const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<PaymentUpdateAction> >
     */
    private static $discriminatorClasses = [
        'addInterfaceInteraction' => PaymentAddInterfaceInteractionActionModel::class,
        'addTransaction' => PaymentAddTransactionActionModel::class,
        'changeAmountPlanned' => PaymentChangeAmountPlannedActionModel::class,
        'changeTransactionInteractionId' => PaymentChangeTransactionInteractionIdActionModel::class,
        'changeTransactionState' => PaymentChangeTransactionStateActionModel::class,
        'changeTransactionTimestamp' => PaymentChangeTransactionTimestampActionModel::class,
        'setAmountPaid' => PaymentSetAmountPaidActionModel::class,
        'setAmountRefunded' => PaymentSetAmountRefundedActionModel::class,
        'setAnonymousId' => PaymentSetAnonymousIdActionModel::class,
        'setAuthorization' => PaymentSetAuthorizationActionModel::class,
        'setCustomField' => PaymentSetCustomFieldActionModel::class,
        'setCustomType' => PaymentSetCustomTypeActionModel::class,
        'setCustomer' => PaymentSetCustomerActionModel::class,
        'setExternalId' => PaymentSetExternalIdActionModel::class,
        'setInterfaceId' => PaymentSetInterfaceIdActionModel::class,
        'setKey' => PaymentSetKeyActionModel::class,
        'setMethodInfoInterface' => PaymentSetMethodInfoInterfaceActionModel::class,
        'setMethodInfoMethod' => PaymentSetMethodInfoMethodActionModel::class,
        'setMethodInfoName' => PaymentSetMethodInfoNameActionModel::class,
        'setStatusInterfaceCode' => PaymentSetStatusInterfaceCodeActionModel::class,
        'setStatusInterfaceText' => PaymentSetStatusInterfaceTextActionModel::class,
        'transitionState' => PaymentTransitionStateActionModel::class,
    ];

    public function __construct(
    ) {
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<PaymentUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = PaymentUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<PaymentUpdateAction> */
        $type = PaymentUpdateActionModel::class;

        return $type;
    }
}
