<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderUpdateActionModel extends JsonObjectModel implements RecurringOrderUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<RecurringOrderUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'setCustomField' => RecurringOrderSetCustomFieldActionModel::class,
       'setCustomType' => RecurringOrderSetCustomTypeActionModel::class,
       'setExpiresAt' => RecurringOrderSetExpiresAtActionModel::class,
       'setKey' => RecurringOrderSetKeyActionModel::class,
       'setOrderSkipConfiguration' => RecurringOrderSetOrderSkipConfigurationActionModel::class,
       'setRecurringOrderState' => RecurringOrderSetStateActionModel::class,
       'setSchedule' => RecurringOrderSetScheduleActionModel::class,
       'setStartsAt' => RecurringOrderSetStartsAtActionModel::class,
       'transitionState' => RecurringOrderTransitionStateActionModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $action = null
    ) {
        $this->action = $action;
    }

    /**
     *
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
     * @psalm-return class-string<RecurringOrderUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = RecurringOrderUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<RecurringOrderUpdateAction> */
        $type = RecurringOrderUpdateActionModel::class;
        return $type;
    }
}
