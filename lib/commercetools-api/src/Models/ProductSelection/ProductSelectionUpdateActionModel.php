<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionUpdateActionModel extends JsonObjectModel implements ProductSelectionUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**

     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ProductSelectionUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addProduct' => ProductSelectionAddProductActionModel::class,
       'changeName' => ProductSelectionChangeNameActionModel::class,
       'removeProduct' => ProductSelectionRemoveProductActionModel::class,
       'setCustomField' => ProductSelectionSetCustomFieldActionModel::class,
       'setCustomType' => ProductSelectionSetCustomTypeActionModel::class,
       'setKey' => ProductSelectionSetKeyActionModel::class,
       'setVariantSelection' => ProductSelectionSetVariantSelectionActionModel::class,
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
     * @psalm-return class-string<ProductSelectionUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProductSelectionUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ProductSelectionUpdateAction> */
        $type = ProductSelectionUpdateActionModel::class;
        return $type;
    }
}
