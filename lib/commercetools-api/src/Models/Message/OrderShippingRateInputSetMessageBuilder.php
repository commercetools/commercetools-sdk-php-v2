<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputBuilder;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<OrderShippingRateInputSetMessage>
 */
final class OrderShippingRateInputSetMessageBuilder implements Builder
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
     * @var ?int
     */
    protected $sequenceNumber;
    
    /**
     * @var ?ReferenceBuilder|Reference
     */
    protected $resource;
    
    /**
     * @var ?UserProvidedIdentifiersBuilder|UserProvidedIdentifiers
     */
    protected $resourceUserProvidedIdentifiers;
    
    /**
     * @var ?int
     */
    protected $resourceVersion;
    
    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ShippingRateInputBuilder|ShippingRateInput
     */
    protected $shippingRateInput;
    
    /**
     * @var ?ShippingRateInputBuilder|ShippingRateInput
     */
    protected $oldShippingRateInput;

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
     * @return int|null
     */
    final public function getSequenceNumber()
    {
       return $this->sequenceNumber;
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
     * @return int|null
     */
    final public function getResourceVersion()
    {
       return $this->resourceVersion;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return ShippingRateInput|null
     */
    final public function getShippingRateInput()
    {
       return ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput);
    }
    
    /**
     *
     * @return ShippingRateInput|null
     */
    final public function getOldShippingRateInput()
    {
       return ($this->oldShippingRateInput instanceof ShippingRateInputBuilder ? $this->oldShippingRateInput->build() : $this->oldShippingRateInput);
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
    final public function withSequenceNumber(?int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        
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
    final public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldShippingRateInput(?ShippingRateInput $oldShippingRateInput)
    {
        $this->oldShippingRateInput = $oldShippingRateInput;
        
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
    
    /**
     * @return $this
     */
    final public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldShippingRateInputBuilder(?ShippingRateInputBuilder $oldShippingRateInput)
    {
        $this->oldShippingRateInput = $oldShippingRateInput;
        
        return $this;
    }
    
    public function build(): OrderShippingRateInputSetMessage {
        return new OrderShippingRateInputSetMessageModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            $this->sequenceNumber,
            ($this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource),
            ($this->resourceUserProvidedIdentifiers instanceof UserProvidedIdentifiersBuilder ? $this->resourceUserProvidedIdentifiers->build() : $this->resourceUserProvidedIdentifiers),
            $this->resourceVersion,
            $this->type,
            ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput),
            ($this->oldShippingRateInput instanceof ShippingRateInputBuilder ? $this->oldShippingRateInput->build() : $this->oldShippingRateInput)
        );
    }
    
    public static function of(): OrderShippingRateInputSetMessageBuilder
    {
        return new self();
    }
}