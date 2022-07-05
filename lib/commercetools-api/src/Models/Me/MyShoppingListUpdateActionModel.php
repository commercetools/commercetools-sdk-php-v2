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
final class MyShoppingListUpdateActionModel extends JsonObjectModel implements MyShoppingListUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**

     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<MyShoppingListUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addLineItem' => MyShoppingListAddLineItemActionModel::class,
       'addTextLineItem' => MyShoppingListAddTextLineItemActionModel::class,
       'changeLineItemQuantity' => MyShoppingListChangeLineItemQuantityActionModel::class,
       'changeLineItemsOrder' => MyShoppingListChangeLineItemsOrderActionModel::class,
       'changeName' => MyShoppingListChangeNameActionModel::class,
       'changeTextLineItemName' => MyShoppingListChangeTextLineItemNameActionModel::class,
       'changeTextLineItemQuantity' => MyShoppingListChangeTextLineItemQuantityActionModel::class,
       'changeTextLineItemsOrder' => MyShoppingListChangeTextLineItemsOrderActionModel::class,
       'removeLineItem' => MyShoppingListRemoveLineItemActionModel::class,
       'removeTextLineItem' => MyShoppingListRemoveTextLineItemActionModel::class,
       'setCustomField' => MyShoppingListSetCustomFieldActionModel::class,
       'setCustomType' => MyShoppingListSetCustomTypeActionModel::class,
       'setDeleteDaysAfterLastModification' => MyShoppingListSetDeleteDaysAfterLastModificationActionModel::class,
       'setDescription' => MyShoppingListSetDescriptionActionModel::class,
       'setLineItemCustomField' => MyShoppingListSetLineItemCustomFieldActionModel::class,
       'setLineItemCustomType' => MyShoppingListSetLineItemCustomTypeActionModel::class,
       'setTextLineItemCustomField' => MyShoppingListSetTextLineItemCustomFieldActionModel::class,
       'setTextLineItemCustomType' => MyShoppingListSetTextLineItemCustomTypeActionModel::class,
       'setTextLineItemDescription' => MyShoppingListSetTextLineItemDescriptionActionModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
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
     * @psalm-return class-string<MyShoppingListUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = MyShoppingListUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<MyShoppingListUpdateAction> */
        $type = MyShoppingListUpdateActionModel::class;
        return $type;
    }
}
