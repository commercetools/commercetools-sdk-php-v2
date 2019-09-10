<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<UserProvidedIdentifiers>
 */
final class UserProvidedIdentifiersBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $orderNumber;
    
    /**
     * @var ?string
     */
    protected $externalId;
    
    /**
     * @var ?string
     */
    protected $sku;
    
    /**
     * @var ?string
     */
    protected $customerNumber;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $slug;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getOrderNumber()
    {
       return $this->orderNumber;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       return $this->externalId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       return $this->sku;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerNumber()
    {
       return $this->customerNumber;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
    {
       return ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    /**
     * @return $this
     */
    final public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSku(?string $sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    public function build(): UserProvidedIdentifiers {
        return new UserProvidedIdentifiersModel(
            $this->orderNumber,
            $this->externalId,
            $this->sku,
            $this->customerNumber,
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug),
            $this->key
        );
    }
    
    public static function of(): UserProvidedIdentifiersBuilder
    {
        return new self();
    }
}