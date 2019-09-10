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


final class CustomerEmailVerifyModel extends JsonObjectModel implements CustomerEmailVerify
{
    
    public function __construct(
        string $tokenValue = null,
        int $version = null
    ) {
        $this->tokenValue = $tokenValue;
        $this->version = $version;
        
    }

    /**
     * @var ?string
     */
    protected $tokenValue;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return string|null
     */
    final public function getTokenValue()
    {
       if (is_null($this->tokenValue)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerEmailVerify::FIELD_TOKEN_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->tokenValue = (string)$data;
       }
       return $this->tokenValue;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomerEmailVerify::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    final public function setTokenValue(?string $tokenValue): void
    {
        $this->tokenValue = $tokenValue;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
}