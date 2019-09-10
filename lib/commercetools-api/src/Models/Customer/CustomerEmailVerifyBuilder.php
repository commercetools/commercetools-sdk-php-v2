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
 * @implements Builder<CustomerEmailVerify>
 */
final class CustomerEmailVerifyBuilder implements Builder
{
    public function __construct() {
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
       return $this->tokenValue;
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
     * @return $this
     */
    final public function withTokenValue(?string $tokenValue)
    {
        $this->tokenValue = $tokenValue;
        
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
    
    public function build(): CustomerEmailVerify {
        return new CustomerEmailVerifyModel(
            $this->tokenValue,
            $this->version
        );
    }
    
    public static function of(): CustomerEmailVerifyBuilder
    {
        return new self();
    }
}