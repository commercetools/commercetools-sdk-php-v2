<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MyPaymentUpdateActionModel extends JsonObjectModel implements MyPaymentUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<MyPaymentUpdateAction> >
     */
    private static $discriminatorClasses = [
        'addTransaction' => MyPaymentAddTransactionActionModel::class,
        'changeAmountPlanned' => MyPaymentChangeAmountPlannedActionModel::class,
        'setCustomField' => MyPaymentSetCustomFieldActionModel::class,
        'setMethodInfoInterface' => MyPaymentSetMethodInfoInterfaceActionModel::class,
        'setMethodInfoMethod' => MyPaymentSetMethodInfoMethodActionModel::class,
        'setMethodInfoName' => MyPaymentSetMethodInfoNameActionModel::class,
    ];

    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyPaymentUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<MyPaymentUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = MyPaymentUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<MyPaymentUpdateAction> */
        $type = MyPaymentUpdateActionModel::class;

        return $type;
    }
}
