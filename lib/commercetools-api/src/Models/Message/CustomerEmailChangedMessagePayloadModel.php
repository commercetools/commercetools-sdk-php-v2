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


final class CustomerEmailChangedMessagePayloadModel extends JsonObjectModel implements CustomerEmailChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CustomerEmailChanged';
    public function __construct(
        string $type = null,
        string $email = null
    ) {
        $this->type = $type;
        $this->email = $email;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
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
    final public function getEmail()
    {
       if (is_null($this->email)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerEmailChangedMessagePayload::FIELD_EMAIL);
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
    
    final public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    
}