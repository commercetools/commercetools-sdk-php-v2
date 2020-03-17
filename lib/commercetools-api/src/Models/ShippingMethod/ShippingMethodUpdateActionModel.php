<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingMethodUpdateActionModel extends JsonObjectModel implements ShippingMethodUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ShippingMethodUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addShippingRate' => ShippingMethodAddShippingRateActionModel::class,
       'addZone' => ShippingMethodAddZoneActionModel::class,
       'changeIsDefault' => ShippingMethodChangeIsDefaultActionModel::class,
       'changeName' => ShippingMethodChangeNameActionModel::class,
       'changeTaxCategory' => ShippingMethodChangeTaxCategoryActionModel::class,
       'removeShippingRate' => ShippingMethodRemoveShippingRateActionModel::class,
       'removeZone' => ShippingMethodRemoveZoneActionModel::class,
       'setDescription' => ShippingMethodSetDescriptionActionModel::class,
       'setKey' => ShippingMethodSetKeyActionModel::class,
       'setLocalizedDescription' => ShippingMethodSetLocalizedDescriptionActionModel::class,
       'setPredicate' => ShippingMethodSetPredicateActionModel::class,
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
            $data = $this->raw(ShippingMethodUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ShippingMethodUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ShippingMethodUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ShippingMethodUpdateAction> */
        $type = ShippingMethodUpdateActionModel::class;
        return $type;
    }
}
