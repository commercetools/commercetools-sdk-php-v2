<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShippingRatePriceTierModel extends JsonObjectModel implements ShippingRatePriceTier
{
    const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<ShippingRatePriceTier> >
     */
    private static $discriminatorClasses = [
        'CartScore' => CartScoreTierModel::class,
        'CartClassification' => CartClassificationTierModel::class,
        'CartValue' => CartValueTierModel::class,
    ];

    public function __construct(
    ) {
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingRatePriceTier::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ShippingRatePriceTier>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ShippingRatePriceTier::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ShippingRatePriceTier> */
        $type = ShippingRatePriceTierModel::class;

        return $type;
    }
}
