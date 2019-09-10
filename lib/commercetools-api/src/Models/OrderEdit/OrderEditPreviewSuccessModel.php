<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Message\MessagePayloadCollection;

final class OrderEditPreviewSuccessModel extends JsonObjectModel implements OrderEditPreviewSuccess
{
    const DISCRIMINATOR_VALUE = 'PreviewSuccess';
    public function __construct(
        string $type = null,
        StagedOrder $preview = null,
        MessagePayloadCollection $messagePayloads = null
    ) {
        $this->type = $type;
        $this->preview = $preview;
        $this->messagePayloads = $messagePayloads;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?StagedOrder
     */
    protected $preview;
    
    /**
     * @var ?MessagePayloadCollection
     */
    protected $messagePayloads;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderEditResult::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return StagedOrder|null
     */
    final public function getPreview()
    {
       if (is_null($this->preview)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditPreviewSuccess::FIELD_PREVIEW);
           if (is_null($data)) {
               return null;
           }
           
           $this->preview = StagedOrderModel::of($data);
       }
       return $this->preview;
    }
    
    /**
     *
     * @return MessagePayloadCollection|null
     */
    final public function getMessagePayloads()
    {
       if (is_null($this->messagePayloads)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderEditPreviewSuccess::FIELD_MESSAGE_PAYLOADS);
           if (is_null($data)) {
               return null;
           }
           $this->messagePayloads = MessagePayloadCollection::fromArray($data);
       }
       return $this->messagePayloads;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setPreview(?StagedOrder $preview): void
    {
        $this->preview = $preview;
    }
    
    final public function setMessagePayloads(?MessagePayloadCollection $messagePayloads): void
    {
        $this->messagePayloads = $messagePayloads;
    }
    
}