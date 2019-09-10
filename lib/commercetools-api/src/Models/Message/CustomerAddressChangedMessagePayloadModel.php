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

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;

final class CustomerAddressChangedMessagePayloadModel extends JsonObjectModel implements CustomerAddressChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CustomerAddressChanged';
    public function __construct(
        string $type = null,
        Address $address = null
    ) {
        $this->type = $type;
        $this->address = $address;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Address
     */
    protected $address;

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
     * @return Address|null
     */
    final public function getAddress()
    {
       if (is_null($this->address)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomerAddressChangedMessagePayload::FIELD_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->address = AddressModel::of($data);
       }
       return $this->address;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
    
}