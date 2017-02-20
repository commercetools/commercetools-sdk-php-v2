<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ZoneUpdateAction extends UpdateAction {

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'action';
    public function __construct(array $data = []) {
        $this->action = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'addLocation' => ZoneAddLocationAction::class,
        'changeName' => ZoneChangeNameAction::class,
        'removeLocation' => ZoneRemoveLocationAction::class,
        'setDescription' => ZoneSetDescriptionAction::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return ZoneUpdateAction::class;
    }
}
