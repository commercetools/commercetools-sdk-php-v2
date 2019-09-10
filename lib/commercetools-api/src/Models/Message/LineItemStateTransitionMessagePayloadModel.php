<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class LineItemStateTransitionMessagePayloadModel extends JsonObjectModel implements LineItemStateTransitionMessagePayload
{
    const DISCRIMINATOR_VALUE = 'LineItemStateTransition';
    public function __construct(
        string $type = null,
        StateReference $toState = null,
        StateReference $fromState = null,
        int $quantity = null,
        string $lineItemId = null,
        DateTimeImmutable $transitionDate = null
    ) {
        $this->type = $type;
        $this->toState = $toState;
        $this->fromState = $fromState;
        $this->quantity = $quantity;
        $this->lineItemId = $lineItemId;
        $this->transitionDate = $transitionDate;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?StateReference
     */
    protected $toState;
    
    /**
     * @var ?StateReference
     */
    protected $fromState;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $transitionDate;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getToState()
    {
       if (is_null($this->toState)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemStateTransitionMessagePayload::FIELD_TO_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->toState = StateReferenceModel::of($data);
       }
       return $this->toState;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getFromState()
    {
       if (is_null($this->fromState)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemStateTransitionMessagePayload::FIELD_FROM_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->fromState = StateReferenceModel::of($data);
       }
       return $this->fromState;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(LineItemStateTransitionMessagePayload::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(LineItemStateTransitionMessagePayload::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getTransitionDate()
    {
       if (is_null($this->transitionDate)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->transitionDate = $data;
       }
       return $this->transitionDate;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setToState(?StateReference $toState): void
    {
        $this->toState = $toState;
    }
    
    final public function setFromState(?StateReference $fromState): void
    {
        $this->fromState = $fromState;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
    final public function setTransitionDate(?DateTimeImmutable $transitionDate): void
    {
        $this->transitionDate = $transitionDate;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]) && $data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] instanceof \DateTimeImmutable) {
           $data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] = $data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}