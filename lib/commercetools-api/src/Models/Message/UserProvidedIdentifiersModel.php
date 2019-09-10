<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class UserProvidedIdentifiersModel extends JsonObjectModel implements UserProvidedIdentifiers
{
    
    public function __construct(
        string $orderNumber = null,
        string $externalId = null,
        string $sku = null,
        string $customerNumber = null,
        LocalizedString $slug = null,
        string $key = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->externalId = $externalId;
        $this->sku = $sku;
        $this->customerNumber = $customerNumber;
        $this->slug = $slug;
        $this->key = $key;
        
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
     * @var ?LocalizedString
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
       if (is_null($this->orderNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(UserProvidedIdentifiers::FIELD_ORDER_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->orderNumber = (string)$data;
       }
       return $this->orderNumber;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       if (is_null($this->externalId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(UserProvidedIdentifiers::FIELD_EXTERNAL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->externalId = (string)$data;
       }
       return $this->externalId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(UserProvidedIdentifiers::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerNumber()
    {
       if (is_null($this->customerNumber)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(UserProvidedIdentifiers::FIELD_CUSTOMER_NUMBER);
           if (is_null($data)) {
               return null;
           }
           $this->customerNumber = (string)$data;
       }
       return $this->customerNumber;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
    {
       if (is_null($this->slug)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(UserProvidedIdentifiers::FIELD_SLUG);
           if (is_null($data)) {
               return null;
           }
           
           $this->slug = LocalizedStringModel::of($data);
       }
       return $this->slug;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(UserProvidedIdentifiers::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }
    
    final public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
    final public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }
    
    final public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}