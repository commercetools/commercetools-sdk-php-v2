<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductDiscountUpdateActionModel extends JsonObjectModel implements ProductDiscountUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ProductDiscountUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'changeIsActive' => ProductDiscountChangeIsActiveActionModel::class,
       'changeName' => ProductDiscountChangeNameActionModel::class,
       'changePredicate' => ProductDiscountChangePredicateActionModel::class,
       'changeSortOrder' => ProductDiscountChangeSortOrderActionModel::class,
       'changeValue' => ProductDiscountChangeValueActionModel::class,
       'setDescription' => ProductDiscountSetDescriptionActionModel::class,
       'setKey' => ProductDiscountSetKeyActionModel::class,
       'setValidFrom' => ProductDiscountSetValidFromActionModel::class,
       'setValidFromAndUntil' => ProductDiscountSetValidFromAndUntilActionModel::class,
       'setValidUntil' => ProductDiscountSetValidUntilActionModel::class,
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
            $data = $this->raw(ProductDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ProductDiscountUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProductDiscountUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ProductDiscountUpdateAction> */
        $type = ProductDiscountUpdateActionModel::class;
        return $type;
    }
}
