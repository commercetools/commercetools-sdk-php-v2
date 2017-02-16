<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateUpdateAction extends UpdateAction {

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'action';
    public function __construct(array $data = []) {
        $this->action = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'addRoles' => StateAddRolesAction::class,
        'changeInitial' => StateChangeInitialAction::class,
        'changeKey' => StateChangeKeyAction::class,
        'changeType' => StateChangeTypeAction::class,
        'removeRoles' => StateRemoveRolesAction::class,
        'setDescription' => StateSetDescriptionAction::class,
        'setName' => StateSetNameAction::class,
        'setRoles' => StateSetRolesAction::class,
        'setTransitions' => StateSetTransitions::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return StateUpdateAction::class;
    }
}
