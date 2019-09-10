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
 * @implements Builder<CustomerCreateEmailToken>
 */
final class CustomerCreateEmailTokenBuilder implements Builder
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
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;

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
    
    public function build(): CustomerCreateEmailToken {
        return new CustomerCreateEmailTokenModel(
            $this->ttlMinutes,
            $this->id,
            $this->version
        );
    }
    
    public static function of(): CustomerCreateEmailTokenBuilder
    {
        return new self();
    }
}