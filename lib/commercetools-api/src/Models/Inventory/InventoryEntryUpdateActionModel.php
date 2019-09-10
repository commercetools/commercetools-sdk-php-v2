<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class InventoryEntryUpdateActionModel extends JsonObjectModel implements InventoryEntryUpdateAction
{
    const DISCRIMINATOR_VALUE = '';
    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @var ?string
     */
    protected $action;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InventoryEntryUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    /**
     * @psalm-var array<string, class-string<InventoryEntryUpdateAction> >
     * 
     */
    private static $discriminatorClasses = [
       'addQuantity' => InventoryEntryAddQuantityActionModel::class,
       'changeQuantity' => InventoryEntryChangeQuantityActionModel::class,
       'removeQuantity' => InventoryEntryRemoveQuantityActionModel::class,
       'setCustomField' => InventoryEntrySetCustomFieldActionModel::class,
       'setCustomType' => InventoryEntrySetCustomTypeActionModel::class,
       'setExpectedDelivery' => InventoryEntrySetExpectedDeliveryActionModel::class,
       'setRestockableInDays' => InventoryEntrySetRestockableInDaysActionModel::class,
       'setSupplyChannel' => InventoryEntrySetSupplyChannelActionModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<InventoryEntryUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = InventoryEntryUpdateAction::DISCRIMINATOR_FIELD;
       if (is_object($value) && isset($value->$fieldName)) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value->$fieldName;
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       if (is_array($value) && isset($value[$fieldName])) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value[$fieldName];
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       
       /** @psalm-var class-string<InventoryEntryUpdateAction> */
       $type = InventoryEntryUpdateActionModel::class;
       return $type;
    }
}