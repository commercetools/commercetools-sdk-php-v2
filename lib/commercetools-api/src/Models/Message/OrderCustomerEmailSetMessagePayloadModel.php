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


final class OrderCustomerEmailSetMessagePayloadModel extends JsonObjectModel implements OrderCustomerEmailSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderCustomerEmailSet';
    public function __construct(
        string $type = null,
        string $oldEmail = null,
        string $email = null
    ) {
        $this->type = $type;
        $this->oldEmail = $oldEmail;
        $this->email = $email;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $oldEmail;
    
    /**
     * @var ?string
     */
    protected $email;

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
     * @return string|null
     */
    final public function getOldEmail()
    {
       if (is_null($this->oldEmail)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderCustomerEmailSetMessagePayload::FIELD_OLD_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->oldEmail = (string)$data;
       }
       return $this->oldEmail;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       if (is_null($this->email)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderCustomerEmailSetMessagePayload::FIELD_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->email = (string)$data;
       }
       return $this->email;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setOldEmail(?string $oldEmail): void
    {
        $this->oldEmail = $oldEmail;
    }
    
    final public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    
}