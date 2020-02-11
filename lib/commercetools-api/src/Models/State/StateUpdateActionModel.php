<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class StateUpdateActionModel extends JsonObjectModel implements StateUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<StateUpdateAction> >
     * 
     */
    private static $discriminatorClasses = [
       'addRoles' => StateAddRolesActionModel::class,
       'changeInitial' => StateChangeInitialActionModel::class,
       'changeKey' => StateChangeKeyActionModel::class,
       'changeType' => StateChangeTypeActionModel::class,
       'removeRoles' => StateRemoveRolesActionModel::class,
       'setDescription' => StateSetDescriptionActionModel::class,
       'setName' => StateSetNameActionModel::class,
       'setRoles' => StateSetRolesActionModel::class,
       'setTransitions' => StateSetTransitionsActionModel::class,
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
            $data = $this->raw(StateUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<StateUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = StateUpdateAction::DISCRIMINATOR_FIELD;
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

       /** @psalm-var class-string<StateUpdateAction> */
       $type = StateUpdateActionModel::class;
       return $type;
    }
}
