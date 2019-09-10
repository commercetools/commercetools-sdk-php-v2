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


final class SubscriptionDraftModel extends JsonObjectModel implements SubscriptionDraft
{
    
    public function __construct(
        DeliveryFormat $format = null,
        Destination $destination = null,
        ChangeSubscriptionCollection $changes = null,
        MessageSubscriptionCollection $messages = null,
        string $key = null
    ) {
        $this->format = $format;
        $this->destination = $destination;
        $this->changes = $changes;
        $this->messages = $messages;
        $this->key = $key;
        
    }

    /**
     * @var ?DeliveryFormat
     */
    protected $format;
    
    /**
     * @var ?Destination
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
       if (is_null($this->format)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(SubscriptionDraft::FIELD_FORMAT);
           if (is_null($data)) {
               return null;
           }
           $className = DeliveryFormatModel::resolveDiscriminatorClass($data);
           $this->format = $className::of($data);
       }
       return $this->format;
    }
    
    /**
     *
     * @return Destination|null
     */
    final public function getDestination()
    {
       if (is_null($this->destination)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(SubscriptionDraft::FIELD_DESTINATION);
           if (is_null($data)) {
               return null;
           }
           $className = DestinationModel::resolveDiscriminatorClass($data);
           $this->destination = $className::of($data);
       }
       return $this->destination;
    }
    
    /**
     *
     * @return ChangeSubscriptionCollection|null
     */
    final public function getChanges()
    {
       if (is_null($this->changes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(SubscriptionDraft::FIELD_CHANGES);
           if (is_null($data)) {
               return null;
           }
           $this->changes = ChangeSubscriptionCollection::fromArray($data);
       }
       return $this->changes;
    }
    
    /**
     *
     * @return MessageSubscriptionCollection|null
     */
    final public function getMessages()
    {
       if (is_null($this->messages)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(SubscriptionDraft::FIELD_MESSAGES);
           if (is_null($data)) {
               return null;
           }
           $this->messages = MessageSubscriptionCollection::fromArray($data);
       }
       return $this->messages;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SubscriptionDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setFormat(?DeliveryFormat $format): void
    {
        $this->format = $format;
    }
    
    final public function setDestination(?Destination $destination): void
    {
        $this->destination = $destination;
    }
    
    final public function setChanges(?ChangeSubscriptionCollection $changes): void
    {
        $this->changes = $changes;
    }
    
    final public function setMessages(?MessageSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}