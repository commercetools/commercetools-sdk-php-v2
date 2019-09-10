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
 * @implements Builder<CustomerChangePassword>
 */
final class CustomerChangePasswordBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $newPassword;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?string
     */
    protected $currentPassword;

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
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
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
    final public function getCurrentPassword()
    {
       return $this->currentPassword;
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
    final public function withId(?string $id)
    {
        $this->id = $id;
        
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
    final public function withCurrentPassword(?string $currentPassword)
    {
        $this->currentPassword = $currentPassword;
        
        return $this;
    }
    
    public function build(): CustomerChangePassword {
        return new CustomerChangePasswordModel(
            $this->newPassword,
            $this->id,
            $this->version,
            $this->currentPassword
        );
    }
    
    public static function of(): CustomerChangePasswordBuilder
    {
        return new self();
    }
}