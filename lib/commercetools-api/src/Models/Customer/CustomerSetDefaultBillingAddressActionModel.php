<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomerSetDefaultBillingAddressActionModel extends JsonObjectModel implements CustomerSetDefaultBillingAddressAction
{
    const DISCRIMINATOR_VALUE = 'setDefaultBillingAddress';
    public function __construct(
        string $action = null,
        string $addressId = null
    ) {
        $this->action = $action;
        $this->addressId = $addressId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $addressId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAddressId()
    {
       if (is_null($this->addressId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerSetDefaultBillingAddressAction::FIELD_ADDRESS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->addressId = (string)$data;
       }
       return $this->addressId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAddressId(?string $addressId): void
    {
        $this->addressId = $addressId;
    }
    
}