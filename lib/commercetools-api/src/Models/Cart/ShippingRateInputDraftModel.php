<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShippingRateInputDraftModel extends JsonObjectModel implements ShippingRateInputDraft
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<ShippingRateInputDraft> >
     */
    private static $discriminatorClasses = [
        'Classification' => ClassificationShippingRateInputDraftModel::class,
        'Score' => ScoreShippingRateInputDraftModel::class,
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
            $data = $this->raw(ShippingRateInputDraft::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ShippingRateInputDraft>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ShippingRateInputDraft::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ShippingRateInputDraft> */
        $type = ShippingRateInputDraftModel::class;

        return $type;
    }
}
