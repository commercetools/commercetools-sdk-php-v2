<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;

/**
 * @implements Builder<CreatedBy>
 */
final class CreatedByBuilder implements Builder
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
    protected $clientId;
    
    /**
     * @var ?string
     */
    protected $externalUserId;
    
    /**
     * @var ?CustomerReferenceBuilder|CustomerReference
     */
    protected $customer;

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
    final public function getClientId()
    {
       return $this->clientId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalUserId()
    {
       return $this->externalUserId;
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer);
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
    final public function withClientId(?string $clientId)
    {
        $this->clientId = $clientId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalUserId(?string $externalUserId)
    {
        $this->externalUserId = $externalUserId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): CreatedBy {
        return new CreatedByModel(
            $this->anonymousId,
            $this->clientId,
            $this->externalUserId,
            ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer)
        );
    }
    
    public static function of(): CreatedByBuilder
    {
        return new self();
    }
}