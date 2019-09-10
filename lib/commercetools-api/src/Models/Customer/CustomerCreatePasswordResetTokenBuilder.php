<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerCreatePasswordResetToken>
 */
final class CustomerCreatePasswordResetTokenBuilder implements Builder
{
    public function __construct() {
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
       return $this->ttlMinutes;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getEmail()
    {
       return $this->email;
    }
    /**
     * @return $this
     */
    final public function withTtlMinutes(?int $ttlMinutes)
    {
        $this->ttlMinutes = $ttlMinutes;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEmail(?string $email)
    {
        $this->email = $email;
        
        return $this;
    }
    
    public function build(): CustomerCreatePasswordResetToken {
        return new CustomerCreatePasswordResetTokenModel(
            $this->ttlMinutes,
            $this->email
        );
    }
    
    public static function of(): CustomerCreatePasswordResetTokenBuilder
    {
        return new self();
    }
}