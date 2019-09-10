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
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Subscription>
 */
final class SubscriptionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?CreatedByBuilder|CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedByBuilder|LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?DeliveryFormatBuilder|DeliveryFormat
     */
    protected $format;
    
    /**
     * @var ?DestinationBuilder|Destination
     */
    protected $destination;
    
    /**
     * @var ?ChangeSubscriptionCollection
     */
    protected $changes;
    
    /**
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?string
     */
    protected $status;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
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
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       return ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy);
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       return ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy);
    }
    
    /**
     *
     * @return DeliveryFormat|null
     */
    final public function getFormat()
    {
       return ($this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format);
    }
    
    /**
     *
     * @return Destination|null
     */
    final public function getDestination()
    {
       return ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination);
    }
    
    /**
     *
     * @return ChangeSubscriptionCollection|null
     */
    final public function getChanges()
    {
       return $this->changes;
    }
    
    /**
     *
     * @return MessageSubscriptionCollection|null
     */
    final public function getMessages()
    {
       return $this->messages;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getStatus()
    {
       return $this->status;
    }
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
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
    final public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFormat(?DeliveryFormat $format)
    {
        $this->format = $format;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withChanges(?ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStatus(?string $status)
    {
        $this->status = $status;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFormatBuilder(?DeliveryFormatBuilder $format)
    {
        $this->format = $format;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDestinationBuilder(?DestinationBuilder $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    
    public function build(): Subscription {
        return new SubscriptionModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format),
            ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination),
            $this->changes,
            $this->messages,
            $this->key,
            $this->status
        );
    }
    
    public static function of(): SubscriptionBuilder
    {
        return new self();
    }
}