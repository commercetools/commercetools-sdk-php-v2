<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SubscriptionNotificationModel extends JsonObjectModel implements SubscriptionNotification
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $notificationType;

    /**
     * @psalm-var array<string, class-string<SubscriptionNotification> >
     *
     */
    private static $discriminatorClasses = [
       'Event' => EventDeliveryPayloadModel::class,
       'Message' => MessageDeliveryPayloadModel::class,
       'ResourceCreated' => ResourceCreatedDeliveryPayloadModel::class,
       'ResourceDeleted' => ResourceDeletedDeliveryPayloadModel::class,
       'ResourceUpdated' => ResourceUpdatedDeliveryPayloadModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $notificationType = null
    ) {
        $this->notificationType = $notificationType;
    }

    /**
     * <p>Identifies the payload.</p>
     *
     *
     * @return null|string
     */
    public function getNotificationType()
    {
        if (is_null($this->notificationType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NOTIFICATION_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->notificationType = (string) $data;
        }

        return $this->notificationType;
    }





    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<SubscriptionNotification>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = SubscriptionNotification::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<SubscriptionNotification> */
        $type = SubscriptionNotificationModel::class;
        return $type;
    }
}
