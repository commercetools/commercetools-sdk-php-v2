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


final class CustomerResetPasswordModel extends JsonObjectModel implements CustomerResetPassword
{
    
    public function __construct(
        string $newPassword = null,
        int $version = null,
        string $tokenValue = null
    ) {
        $this->newPassword = $newPassword;
        $this->version = $version;
        $this->tokenValue = $tokenValue;
        
    }

    /**
     * @var ?string
     */
    protected $newPassword;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?string
     */
    protected $tokenValue;

    /**
     *
     * @return string|null
     */
    final public function getNewPassword()
    {
       if (is_null($this->newPassword)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerResetPassword::FIELD_NEW_PASSWORD);
           if (is_null($data)) {
               return null;
           }
           $this->newPassword = (string)$data;
       }
       return $this->newPassword;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomerResetPassword::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTokenValue()
    {
       if (is_null($this->tokenValue)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerResetPassword::FIELD_TOKEN_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->tokenValue = (string)$data;
       }
       return $this->tokenValue;
    }
    final public function setNewPassword(?string $newPassword): void
    {
        $this->newPassword = $newPassword;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
    final public function setTokenValue(?string $tokenValue): void
    {
        $this->tokenValue = $tokenValue;
    }
    
}