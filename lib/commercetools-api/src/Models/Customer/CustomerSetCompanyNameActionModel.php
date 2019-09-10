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


final class CustomerSetCompanyNameActionModel extends JsonObjectModel implements CustomerSetCompanyNameAction
{
    const DISCRIMINATOR_VALUE = 'setCompanyName';
    public function __construct(
        string $action = null,
        string $companyName = null
    ) {
        $this->action = $action;
        $this->companyName = $companyName;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $companyName;

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
    final public function getCompanyName()
    {
       if (is_null($this->companyName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerSetCompanyNameAction::FIELD_COMPANY_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->companyName = (string)$data;
       }
       return $this->companyName;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }
    
}