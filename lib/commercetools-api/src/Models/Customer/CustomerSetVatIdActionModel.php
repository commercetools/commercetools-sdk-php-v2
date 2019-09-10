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


final class CustomerSetVatIdActionModel extends JsonObjectModel implements CustomerSetVatIdAction
{
    const DISCRIMINATOR_VALUE = 'setVatId';
    public function __construct(
        string $action = null,
        string $vatId = null
    ) {
        $this->action = $action;
        $this->vatId = $vatId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $vatId;

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
    final public function getVatId()
    {
       if (is_null($this->vatId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerSetVatIdAction::FIELD_VAT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->vatId = (string)$data;
       }
       return $this->vatId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setVatId(?string $vatId): void
    {
        $this->vatId = $vatId;
    }
    
}