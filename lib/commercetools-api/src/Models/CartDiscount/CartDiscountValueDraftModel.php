<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class CartDiscountValueDraftModel extends JsonObjectModel implements CartDiscountValueDraft
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<CartDiscountValueDraft> >
     *
     */
    private static $discriminatorClasses = [
       'giftLineItem' => CartDiscountValueGiftLineItemDraftModel::class,
       'relative' => CartDiscountValueRelativeDraftModel::class,
       'absolute' => CartDiscountValueAbsoluteDraftModel::class,
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
            $data = $this->raw(CartDiscountValueDraft::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<CartDiscountValueDraft>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = CartDiscountValueDraft::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<CartDiscountValueDraft> */
        $type = CartDiscountValueDraftModel::class;
        return $type;
    }
}
