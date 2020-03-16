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
final class MyCustomerUpdateActionModel extends JsonObjectModel implements MyCustomerUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<MyCustomerUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addAddress' => MyCustomerAddAddressActionModel::class,
       'addBillingAddressId' => MyCustomerAddBillingAddressIdActionModel::class,
       'addShippingAddressId' => MyCustomerAddShippingAddressIdActionModel::class,
       'changeAddress' => MyCustomerChangeAddressActionModel::class,
       'changeEmail' => MyCustomerChangeEmailActionModel::class,
       'removeAddress' => MyCustomerRemoveAddressActionModel::class,
       'removeBillingAddressId' => MyCustomerRemoveBillingAddressIdActionModel::class,
       'removeShippingAddressId' => MyCustomerRemoveShippingAddressIdActionModel::class,
       'setCompanyName' => MyCustomerSetCompanyNameActionModel::class,
       'setCustomField' => MyCustomerSetCustomFieldActionModel::class,
       'setCustomType' => MyCustomerSetCustomTypeActionModel::class,
       'setDateOfBirth' => MyCustomerSetDateOfBirthActionModel::class,
       'setDefaultBillingAddress' => MyCustomerSetDefaultBillingAddressActionModel::class,
       'setDefaultShippingAddress' => MyCustomerSetDefaultShippingAddressActionModel::class,
       'setFirstName' => MyCustomerSetFirstNameActionModel::class,
       'setLastName' => MyCustomerSetLastNameActionModel::class,
       'setLocale' => MyCustomerSetLocaleActionModel::class,
       'setMiddleName' => MyCustomerSetMiddleNameActionModel::class,
       'setSalutation' => MyCustomerSetSalutationActionModel::class,
       'setTitle' => MyCustomerSetTitleActionModel::class,
       'setVatId' => MyCustomerSetVatIdActionModel::class,
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
            $data = $this->raw(MyCustomerUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<MyCustomerUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = MyCustomerUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<MyCustomerUpdateAction> */
        $type = MyCustomerUpdateActionModel::class;
        return $type;
    }
}
