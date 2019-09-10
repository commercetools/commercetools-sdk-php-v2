<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Message\UserProvidedIdentifiers;
use Commercetools\Api\Models\Message\UserProvidedIdentifiersBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<ResourceCreatedDelivery>
 */
final class ResourceCreatedDeliveryBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $projectKey;
    
    /**
     * @var ?ReferenceBuilder|Reference
     */
    protected $resource;
    
    /**
     * @var ?UserProvidedIdentifiersBuilder|UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;
    
    /**
     * @var ?string
     */
    protected $notificationType;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $modifiedAt;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return string|null
     */
    final public function getProjectKey()
    {
       return $this->projectKey;
    }
    
    /**
     *
     * @return Reference|null
     */
    final public function getResource()
    {
       return ($this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource);
    }
    
    /**
     *
     * @return UserProvidedIdentifiers|null
     */
    final public function getResourceUserProvidedIdentifiers()
    {
       return ($this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getNotificationType()
    {
       return $this->notificationType;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getModifiedAt()
    {
       return $this->modifiedAt;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    /**
     * @return $this
     */
    final public function withProjectKey(?string $projectKey)
    {
        $this->projectKey = $projectKey;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResource(?Reference $resource)
    {
        $this->resource = $resource;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResourceUserProvidedIdentifiers(?UserProvidedIdentifiers $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withNotificationType(?string $notificationType)
    {
        $this->notificationType = $notificationType;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withModifiedAt(?DateTimeImmutable $modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResourceUserProvidedIdentifiersBuilder(?UserProvidedIdentifiersBuilder $resourceUserProvidedIdentifiers)
    {
        $this->resourceUserProvidedIdentifiers = $resourceUserProvidedIdentifiers;
        
        return $this;
    }
    
    public function build(): ResourceCreatedDelivery {
        return new ResourceCreatedDeliveryModel(
            $this->projectKey,
            ($this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource),
            ($this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers),
            $this->notificationType,
            $this->modifiedAt,
            $this->version
        );
    }
    
    public static function of(): ResourceCreatedDeliveryBuilder
    {
        return new self();
    }
}