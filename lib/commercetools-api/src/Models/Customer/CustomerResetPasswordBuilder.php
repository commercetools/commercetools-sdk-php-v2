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
 * @implements Builder<CustomerResetPassword>
 */
final class CustomerResetPasswordBuilder implements Builder
{
    public function __construct() {
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
       return $this->newPassword;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTokenValue()
    {
       return $this->tokenValue;
    }
    /**
     * @return $this
     */
    final public function withNewPassword(?string $newPassword)
    {
        $this->newPassword = $newPassword;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTokenValue(?string $tokenValue)
    {
        $this->tokenValue = $tokenValue;
        
        return $this;
    }
    
    public function build(): CustomerResetPassword {
        return new CustomerResetPasswordModel(
            $this->newPassword,
            $this->version,
            $this->tokenValue
        );
    }
    
    public static function of(): CustomerResetPasswordBuilder
    {
        return new self();
    }
}