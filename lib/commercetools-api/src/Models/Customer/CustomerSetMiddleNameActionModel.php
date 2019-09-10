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


final class CustomerSetMiddleNameActionModel extends JsonObjectModel implements CustomerSetMiddleNameAction
{
    const DISCRIMINATOR_VALUE = 'setMiddleName';
    public function __construct(
        string $action = null,
        string $middleName = null
    ) {
        $this->action = $action;
        $this->middleName = $middleName;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $middleName;

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
    final public function getMiddleName()
    {
       if (is_null($this->middleName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerSetMiddleNameAction::FIELD_MIDDLE_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->middleName = (string)$data;
       }
       return $this->middleName;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }
    
}