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


final class CustomerCompanyNameSetMessagePayloadModel extends JsonObjectModel implements CustomerCompanyNameSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CustomerCompanyNameSet';
    public function __construct(
        string $type = null,
        string $companyName = null
    ) {
        $this->type = $type;
        $this->companyName = $companyName;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $companyName;

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
    final public function getCompanyName()
    {
       if (is_null($this->companyName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerCompanyNameSetMessagePayload::FIELD_COMPANY_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->companyName = (string)$data;
       }
       return $this->companyName;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }
    
}