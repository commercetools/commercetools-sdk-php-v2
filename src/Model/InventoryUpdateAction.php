<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventoryUpdateAction extends UpdateAction {

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'action';
    public function __construct(array $data = []) {
        $this->action = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'addQuantity' => InventoryAddQuantityAction::class,
        'changeQuantity' => InventoryChangeQuantityAction::class,
        'removeQuantity' => InventoryRemoveQuantityAction::class,
        'setCustomField' => InventorySetCustomFieldAction::class,
        'setCustomType' => InventorySetCustomTypeAction::class,
        'setExpectedDelivery' => InventorySetExpectedDeliveryAction::class,
        'setRestockableInDays' => InventorySetRestockableInDaysAction::class,
        'setSupplyChannel' => InventorySetSupplyChannelAction::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return InventoryUpdateAction::class;
    }
}
