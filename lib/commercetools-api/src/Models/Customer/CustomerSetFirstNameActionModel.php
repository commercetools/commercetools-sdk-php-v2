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


final class CustomerSetFirstNameActionModel extends JsonObjectModel implements CustomerSetFirstNameAction
{
    const DISCRIMINATOR_VALUE = 'setFirstName';
    public function __construct(
        string $action = null,
        string $firstName = null
    ) {
        $this->action = $action;
        $this->firstName = $firstName;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $firstName;

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
    final public function getFirstName()
    {
       if (is_null($this->firstName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerSetFirstNameAction::FIELD_FIRST_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->firstName = (string)$data;
       }
       return $this->firstName;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }
    
}