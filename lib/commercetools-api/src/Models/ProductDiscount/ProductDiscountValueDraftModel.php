<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductDiscountValueDraftModel extends JsonObjectModel implements ProductDiscountValueDraft
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<ProductDiscountValueDraft> >
     */
    private static $discriminatorClasses = [
        'external' => ProductDiscountValueExternalDraftModel::class,
        'relative' => ProductDiscountValueRelativeDraftModel::class,
        'absolute' => ProductDiscountValueAbsoluteDraftModel::class,
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
            $data = $this->raw(ProductDiscountValueDraft::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ProductDiscountValueDraft>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProductDiscountValueDraft::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ProductDiscountValueDraft> */
        $type = ProductDiscountValueDraftModel::class;

        return $type;
    }
}
