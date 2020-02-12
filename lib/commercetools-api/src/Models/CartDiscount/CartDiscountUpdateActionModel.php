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

final class CartDiscountUpdateActionModel extends JsonObjectModel implements CartDiscountUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<CartDiscountUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'changeCartPredicate' => CartDiscountChangeCartPredicateActionModel::class,
       'changeIsActive' => CartDiscountChangeIsActiveActionModel::class,
       'changeName' => CartDiscountChangeNameActionModel::class,
       'changeRequiresDiscountCode' => CartDiscountChangeRequiresDiscountCodeActionModel::class,
       'changeSortOrder' => CartDiscountChangeSortOrderActionModel::class,
       'changeStackingMode' => CartDiscountChangeStackingModeActionModel::class,
       'changeTarget' => CartDiscountChangeTargetActionModel::class,
       'changeValue' => CartDiscountChangeValueActionModel::class,
       'setCustomField' => CartDiscountSetCustomFieldActionModel::class,
       'setCustomType' => CartDiscountSetCustomTypeActionModel::class,
       'setDescription' => CartDiscountSetDescriptionActionModel::class,
       'setKey' => CartDiscountSetKeyActionModel::class,
       'setValidFrom' => CartDiscountSetValidFromActionModel::class,
       'setValidFromAndUntil' => CartDiscountSetValidFromAndUntilActionModel::class,
       'setValidUntil' => CartDiscountSetValidUntilActionModel::class,
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
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<CartDiscountUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = CartDiscountUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<CartDiscountUpdateAction> */
        $type = CartDiscountUpdateActionModel::class;
        return $type;
    }
}
