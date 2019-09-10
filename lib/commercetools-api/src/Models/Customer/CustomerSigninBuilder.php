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
 * @implements Builder<CustomerSignin>
 */
final class CustomerSigninBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?string
     */
    protected $password;
    
    /**
     * @var ?string
     */
    protected $anonymousCartSignInMode;
    
    /**
     * @var ?string
     */
    protected $anonymousCartId;
    
    /**
     * @var ?string
     */
    protected $email;

    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       return $this->anonymousId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPassword()
    {
       return $this->password;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousCartSignInMode()
    {
       return $this->anonymousCartSignInMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousCartId()
    {
       return $this->anonymousCartId;
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
    final public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPassword(?string $password)
    {
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAnonymousCartSignInMode(?string $anonymousCartSignInMode)
    {
        $this->anonymousCartSignInMode = $anonymousCartSignInMode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAnonymousCartId(?string $anonymousCartId)
    {
        $this->anonymousCartId = $anonymousCartId;
        
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
    
    public function build(): CustomerSignin {
        return new CustomerSigninModel(
            $this->anonymousId,
            $this->password,
            $this->anonymousCartSignInMode,
            $this->anonymousCartId,
            $this->email
        );
    }
    
    public static function of(): CustomerSigninBuilder
    {
        return new self();
    }
}