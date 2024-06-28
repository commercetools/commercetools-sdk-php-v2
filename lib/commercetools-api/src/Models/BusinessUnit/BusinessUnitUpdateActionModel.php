<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitUpdateActionModel extends JsonObjectModel implements BusinessUnitUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<BusinessUnitUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addAddress' => BusinessUnitAddAddressActionModel::class,
       'addAssociate' => BusinessUnitAddAssociateActionModel::class,
       'addBillingAddressId' => BusinessUnitAddBillingAddressIdActionModel::class,
       'addShippingAddressId' => BusinessUnitAddShippingAddressIdActionModel::class,
       'addStore' => BusinessUnitAddStoreActionModel::class,
       'changeAddress' => BusinessUnitChangeAddressActionModel::class,
       'changeApprovalRuleMode' => BusinessUnitChangeApprovalRuleModeActionModel::class,
       'changeAssociate' => BusinessUnitChangeAssociateActionModel::class,
       'changeAssociateMode' => BusinessUnitChangeAssociateModeActionModel::class,
       'changeName' => BusinessUnitChangeNameActionModel::class,
       'changeParentUnit' => BusinessUnitChangeParentUnitActionModel::class,
       'changeStatus' => BusinessUnitChangeStatusActionModel::class,
       'removeAddress' => BusinessUnitRemoveAddressActionModel::class,
       'removeAssociate' => BusinessUnitRemoveAssociateActionModel::class,
       'removeBillingAddressId' => BusinessUnitRemoveBillingAddressIdActionModel::class,
       'removeShippingAddressId' => BusinessUnitRemoveShippingAddressIdActionModel::class,
       'removeStore' => BusinessUnitRemoveStoreActionModel::class,
       'setAddressCustomField' => BusinessUnitSetAddressCustomFieldActionModel::class,
       'setAddressCustomType' => BusinessUnitSetAddressCustomTypeActionModel::class,
       'setAssociates' => BusinessUnitSetAssociatesActionModel::class,
       'setContactEmail' => BusinessUnitSetContactEmailActionModel::class,
       'setCustomField' => BusinessUnitSetCustomFieldActionModel::class,
       'setCustomType' => BusinessUnitSetCustomTypeActionModel::class,
       'setDefaultBillingAddress' => BusinessUnitSetDefaultBillingAddressActionModel::class,
       'setDefaultShippingAddress' => BusinessUnitSetDefaultShippingAddressActionModel::class,
       'setStoreMode' => BusinessUnitSetStoreModeActionModel::class,
       'setStores' => BusinessUnitSetStoresActionModel::class,
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
     * @psalm-return class-string<BusinessUnitUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = BusinessUnitUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<BusinessUnitUpdateAction> */
        $type = BusinessUnitUpdateActionModel::class;
        return $type;
    }
}
