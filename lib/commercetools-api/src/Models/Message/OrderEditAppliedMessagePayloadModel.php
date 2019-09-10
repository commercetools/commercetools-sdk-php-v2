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

use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditAppliedModel;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Api\Models\OrderEdit\OrderEditReferenceModel;

final class OrderEditAppliedMessagePayloadModel extends JsonObjectModel implements OrderEditAppliedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderEditApplied';
    public function __construct(
        string $type = null,
        OrderEditApplied $result = null,
        OrderEditReference $edit = null
    ) {
        $this->type = $type;
        $this->result = $result;
        $this->edit = $edit;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?OrderEditApplied
     */
    protected $result;
    
    /**
     * @var ?OrderEditReference
     */
    protected $edit;

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
     * @return OrderEditApplied|null
     */
    final public function getResult()
    {
       if (is_null($this->result)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditAppliedMessagePayload::FIELD_RESULT);
           if (is_null($data)) {
               return null;
           }
           
           $this->result = OrderEditAppliedModel::of($data);
       }
       return $this->result;
    }
    
    /**
     *
     * @return OrderEditReference|null
     */
    final public function getEdit()
    {
       if (is_null($this->edit)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditAppliedMessagePayload::FIELD_EDIT);
           if (is_null($data)) {
               return null;
           }
           
           $this->edit = OrderEditReferenceModel::of($data);
       }
       return $this->edit;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setResult(?OrderEditApplied $result): void
    {
        $this->result = $result;
    }
    
    final public function setEdit(?OrderEditReference $edit): void
    {
        $this->edit = $edit;
    }
    
}