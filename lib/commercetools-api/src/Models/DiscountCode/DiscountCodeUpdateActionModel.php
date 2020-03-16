<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountCodeUpdateActionModel extends JsonObjectModel implements DiscountCodeUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<DiscountCodeUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'changeCartDiscounts' => DiscountCodeChangeCartDiscountsActionModel::class,
       'changeGroups' => DiscountCodeChangeGroupsActionModel::class,
       'changeIsActive' => DiscountCodeChangeIsActiveActionModel::class,
       'setCartPredicate' => DiscountCodeSetCartPredicateActionModel::class,
       'setCustomField' => DiscountCodeSetCustomFieldActionModel::class,
       'setCustomType' => DiscountCodeSetCustomTypeActionModel::class,
       'setDescription' => DiscountCodeSetDescriptionActionModel::class,
       'setMaxApplications' => DiscountCodeSetMaxApplicationsActionModel::class,
       'setMaxApplicationsPerCustomer' => DiscountCodeSetMaxApplicationsPerCustomerActionModel::class,
       'setName' => DiscountCodeSetNameActionModel::class,
       'setValidFrom' => DiscountCodeSetValidFromActionModel::class,
       'setValidFromAndUntil' => DiscountCodeSetValidFromAndUntilActionModel::class,
       'setValidUntil' => DiscountCodeSetValidUntilActionModel::class,
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
            $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<DiscountCodeUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = DiscountCodeUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<DiscountCodeUpdateAction> */
        $type = DiscountCodeUpdateActionModel::class;
        return $type;
    }
}
