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
final class MyBusinessUnitUpdateActionModel extends JsonObjectModel implements MyBusinessUnitUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<MyBusinessUnitUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addAddress' => MyBusinessUnitAddAddressActionModel::class,
       'addBillingAddressId' => MyBusinessUnitAddBillingAddressIdActionModel::class,
       'addShippingAddressId' => MyBusinessUnitAddShippingAddressIdActionModel::class,
       'changeAddress' => MyBusinessUnitChangeAddressActionModel::class,
       'changeAssociate' => MyBusinessUnitChangeAssociateActionModel::class,
       'changeName' => MyBusinessUnitChangeNameActionModel::class,
       'changeParentUnit' => MyBusinessUnitChangeParentUnitActionModel::class,
       'removeAddress' => MyBusinessUnitRemoveAddressActionModel::class,
       'removeAssociate' => MyBusinessUnitRemoveAssociateActionModel::class,
       'removeBillingAddressId' => MyBusinessUnitRemoveBillingAddressIdActionModel::class,
       'removeShippingAddressId' => MyBusinessUnitRemoveShippingAddressIdActionModel::class,
       'setAddressCustomField' => MyBusinessUnitSetAddressCustomFieldActionModel::class,
       'setAddressCustomType' => MyBusinessUnitSetAddressCustomTypeActionModel::class,
       'setContactEmail' => MyBusinessUnitSetContactEmailActionModel::class,
       'setCustomField' => MyBusinessUnitSetCustomFieldActionModel::class,
       'setCustomType' => MyBusinessUnitSetCustomTypeActionModel::class,
       'setDefaultBillingAddress' => MyBusinessUnitSetDefaultBillingAddressActionModel::class,
       'setDefaultShippingAddress' => MyBusinessUnitSetDefaultShippingAddressActionModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $action = null
    ) {
        $this->action = $action;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }





    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<MyBusinessUnitUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = MyBusinessUnitUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<MyBusinessUnitUpdateAction> */
        $type = MyBusinessUnitUpdateActionModel::class;
        return $type;
    }
}
