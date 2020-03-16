<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartUpdateActionModel extends JsonObjectModel implements MyCartUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<MyCartUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addDiscountCode' => MyCartAddDiscountCodeActionModel::class,
       'addItemShippingAddress' => MyCartAddItemShippingAddressActionModel::class,
       'addLineItem' => MyCartAddLineItemActionModel::class,
       'addPayment' => MyCartAddPaymentActionModel::class,
       'applyDeltaToLineItemShippingDetailsTargets' => MyCartApplyDeltaToLineItemShippingDetailsTargetsActionModel::class,
       'changeLineItemQuantity' => MyCartChangeLineItemQuantityActionModel::class,
       'changeTaxMode' => MyCartChangeTaxModeActionModel::class,
       'recalculate' => MyCartRecalculateActionModel::class,
       'removeDiscountCode' => MyCartRemoveDiscountCodeActionModel::class,
       'removeItemShippingAddress' => MyCartRemoveItemShippingAddressActionModel::class,
       'removeLineItem' => MyCartRemoveLineItemActionModel::class,
       'removePayment' => MyCartRemovePaymentActionModel::class,
       'setBillingAddress' => MyCartSetBillingAddressActionModel::class,
       'setCountry' => MyCartSetCountryActionModel::class,
       'setCustomField' => MyCartSetCustomFieldActionModel::class,
       'setCustomShippingMethod' => MyCartSetCustomShippingMethodActionModel::class,
       'setCustomType' => MyCartSetCustomTypeActionModel::class,
       'setDeleteDaysAfterLastModification' => MyCartSetDeleteDaysAfterLastModificationActionModel::class,
       'setLineItemCustomField' => MyCartSetLineItemCustomFieldActionModel::class,
       'setLineItemCustomType' => MyCartSetLineItemCustomTypeActionModel::class,
       'setLineItemShippingDetails' => MyCartSetLineItemShippingDetailsActionModel::class,
       'setLocale' => MyCartSetLocaleActionModel::class,
       'setShippingAddress' => MyCartSetShippingAddressActionModel::class,
       'setShippingMethod' => MyCartSetShippingMethodActionModel::class,
       'updateItemShippingAddress' => MyCartUpdateItemShippingAddressActionModel::class,
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
            $data = $this->raw(MyCartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<MyCartUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = MyCartUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
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

        /** @psalm-var class-string<MyCartUpdateAction> */
        $type = MyCartUpdateActionModel::class;
        return $type;
    }
}
