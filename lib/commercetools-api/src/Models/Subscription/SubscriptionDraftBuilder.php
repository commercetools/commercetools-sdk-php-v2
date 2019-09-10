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

/**
 * @implements Builder<SubscriptionDraft>
 */
final class SubscriptionDraftBuilder implements Builder
{
    public function __construct() {
    }

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
    
    public function build(): SubscriptionDraft {
        return new SubscriptionDraftModel(
            ($this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format),
            ($this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination),
            $this->changes,
            $this->messages,
            $this->key
        );
    }
    
    public static function of(): SubscriptionDraftBuilder
    {
        return new self();
    }
}