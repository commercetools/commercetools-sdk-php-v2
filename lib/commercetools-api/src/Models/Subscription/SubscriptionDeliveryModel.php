<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Api\Models\Message\UserProvidedIdentifiersModel;

final class SubscriptionDeliveryModel extends JsonObjectModel implements SubscriptionDelivery
{
    const DISCRIMINATOR_VALUE = '';
    public function __construct(
        string $projectKey = null,
        Reference $resource = null,
        UserProvidedIdentifiers $resourceUserProvidedIdentifiers = null,
        string $notificationType = null
    ) {
        $this->projectKey = $projectKey;
        $this->resource = $resource;
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        $this->notificationType = $notificationType;
        $this->notificationType = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @var ?string
     */
    protected $projectKey;
    
    /**
     * @var ?Reference
     */
    protected $resource;
    
    /**
     * @var ?UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;
    
    /**
     * @var ?string
     */
    protected $notificationType;

    /**
     *
     * @return string|null
     */
    final public function getProjectKey()
    {
       if (is_null($this->projectKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SubscriptionDelivery::FIELD_PROJECT_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->projectKey = (string)$data;
       }
       return $this->projectKey;
    }
    
    /**
     *
     * @return Reference|null
     */
    final public function getResource()
    {
       if (is_null($this->resource)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(SubscriptionDelivery::FIELD_RESOURCE);
           if (is_null($data)) {
               return null;
           }
           $className = ReferenceModel::resolveDiscriminatorClass($data);
           $this->resource = $className::of($data);
       }
       return $this->resource;
    }
    
    /**
     *
     * @return UserProvidedIdentifiers|null
     */
    final public function getResourceUserProvidedIdentifiers()
    {
       if (is_null($this->resourceUserProvidedIdentifiers)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(SubscriptionDelivery::FIELD_RESOURCE_USER_PROVIDED_IDENTIFIERS);
           if (is_null($data)) {
               return null;
           }
           
           $this->resourceUserProvidedIdentifiers = UserProvidedIdentifiersModel::of($data);
       }
       return $this->resourceUserProvidedIdentifiers;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getNotificationType()
    {
       if (is_null($this->notificationType)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SubscriptionDelivery::FIELD_NOTIFICATION_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->notificationType = (string)$data;
       }
       return $this->notificationType;
    }
    final public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }
    
    final public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }
    
    final public function setResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers): void
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
    }
    
    final public function setNotificationType(?string $notificationType): void
    {
        $this->notificationType = $notificationType;
    }
    
    /**
     * @psalm-var array<string, class-string<SubscriptionDelivery> >
     * 
     */
    private static $discriminatorClasses = [
       'Message' => MessageDeliveryModel::class,
       'ResourceCreated' => ResourceCreatedDeliveryModel::class,
       'ResourceDeleted' => ResourceDeletedDeliveryModel::class,
       'ResourceUpdated' => ResourceUpdatedDeliveryModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<SubscriptionDelivery>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = SubscriptionDelivery::DISCRIMINATOR_FIELD;
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
       
       /** @psalm-var class-string<SubscriptionDelivery> */
       $type = SubscriptionDeliveryModel::class;
       return $type;
    }
}