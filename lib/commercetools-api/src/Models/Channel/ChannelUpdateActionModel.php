<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChannelUpdateActionModel extends JsonObjectModel implements ChannelUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ChannelUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addRoles' => ChannelAddRolesActionModel::class,
       'changeDescription' => ChannelChangeDescriptionActionModel::class,
       'changeKey' => ChannelChangeKeyActionModel::class,
       'changeName' => ChannelChangeNameActionModel::class,
       'removeRoles' => ChannelRemoveRolesActionModel::class,
       'setAddress' => ChannelSetAddressActionModel::class,
       'setAddressCustomField' => ChannelSetAddressCustomFieldActionModel::class,
       'setAddressCustomType' => ChannelSetAddressCustomTypeActionModel::class,
       'setCustomField' => ChannelSetCustomFieldActionModel::class,
       'setCustomType' => ChannelSetCustomTypeActionModel::class,
       'setGeoLocation' => ChannelSetGeoLocationActionModel::class,
       'setRoles' => ChannelSetRolesActionModel::class,
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
     * @psalm-return class-string<ChannelUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ChannelUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<ChannelUpdateAction> */
        $type = ChannelUpdateActionModel::class;
        return $type;
    }
}
