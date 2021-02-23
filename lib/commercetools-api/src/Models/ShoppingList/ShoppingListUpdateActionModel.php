<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShoppingListUpdateActionModel extends JsonObjectModel implements ShoppingListUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ShoppingListUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addLineItem' => ShoppingListAddLineItemActionModel::class,
       'addTextLineItem' => ShoppingListAddTextLineItemActionModel::class,
       'changeLineItemQuantity' => ShoppingListChangeLineItemQuantityActionModel::class,
       'changeLineItemsOrder' => ShoppingListChangeLineItemsOrderActionModel::class,
       'changeName' => ShoppingListChangeNameActionModel::class,
       'changeTextLineItemName' => ShoppingListChangeTextLineItemNameActionModel::class,
       'changeTextLineItemQuantity' => ShoppingListChangeTextLineItemQuantityActionModel::class,
       'changeTextLineItemsOrder' => ShoppingListChangeTextLineItemsOrderActionModel::class,
       'removeLineItem' => ShoppingListRemoveLineItemActionModel::class,
       'removeTextLineItem' => ShoppingListRemoveTextLineItemActionModel::class,
       'setAnonymousId' => ShoppingListSetAnonymousIdActionModel::class,
       'setCustomField' => ShoppingListSetCustomFieldActionModel::class,
       'setCustomType' => ShoppingListSetCustomTypeActionModel::class,
       'setCustomer' => ShoppingListSetCustomerActionModel::class,
       'setDeleteDaysAfterLastModification' => ShoppingListSetDeleteDaysAfterLastModificationActionModel::class,
       'setDescription' => ShoppingListSetDescriptionActionModel::class,
       'setKey' => ShoppingListSetKeyActionModel::class,
       'setLineItemCustomField' => ShoppingListSetLineItemCustomFieldActionModel::class,
       'setLineItemCustomType' => ShoppingListSetLineItemCustomTypeActionModel::class,
       'setSlug' => ShoppingListSetSlugActionModel::class,
       'setStore' => ShoppingListSetStoreActionModel::class,
       'setTextLineItemCustomField' => ShoppingListSetTextLineItemCustomFieldActionModel::class,
       'setTextLineItemCustomType' => ShoppingListSetTextLineItemCustomTypeActionModel::class,
       'setTextLineItemDescription' => ShoppingListSetTextLineItemDescriptionActionModel::class,
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
     * @psalm-return class-string<ShoppingListUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ShoppingListUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ShoppingListUpdateAction> */
        $type = ShoppingListUpdateActionModel::class;
        return $type;
    }
}
