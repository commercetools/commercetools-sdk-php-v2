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


final class CustomerCreatePasswordResetTokenModel extends JsonObjectModel implements CustomerCreatePasswordResetToken
{
    
    public function __construct(
        int $ttlMinutes = null,
        string $email = null
    ) {
        $this->ttlMinutes = $ttlMinutes;
        $this->email = $email;
        
    }

    /**
     * @var ?int
     */
    protected $ttlMinutes;
    
    /**
     * @var ?string
     */
    protected $email;

    /**
     *
     * @return int|null
     */
    final public function getTtlMinutes()
    {
       if (is_null($this->ttlMinutes)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomerCreatePasswordResetToken::FIELD_TTL_MINUTES);
           if (is_null($data)) {
               return null;
           }
           $this->ttlMinutes = (int)$data;
       }
       return $this->ttlMinutes;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       if (is_null($this->email)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerCreatePasswordResetToken::FIELD_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->email = (string)$data;
       }
       return $this->email;
    }
    final public function setTtlMinutes(?int $ttlMinutes): void
    {
        $this->ttlMinutes = $ttlMinutes;
    }
    
    final public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    
}