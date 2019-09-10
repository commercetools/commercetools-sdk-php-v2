<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;

final class MatchingPriceNotFoundErrorModel extends JsonObjectModel implements MatchingPriceNotFoundError
{
    const DISCRIMINATOR_VALUE = 'MatchingPriceNotFound';
    public function __construct(
        string $code = null,
        string $message = null,
        string $country = null,
        string $productId = null,
        CustomerGroupReference $customerGroup = null,
        ChannelReference $channel = null,
        string $currency = null,
        int $variantId = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->country = $country;
        $this->productId = $productId;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->currency = $currency;
        $this->variantId = $variantId;
        
    }

    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $message;
    
    /**
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?ChannelReference
     */
    protected $channel;
    
    /**
     * @var ?string
     */
    protected $currency;
    
    /**
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       if (is_null($this->code)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->code = (string)$data;
       }
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       if (is_null($this->message)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_MESSAGE);
           if (is_null($data)) {
               return null;
           }
           $this->message = (string)$data;
       }
       return $this->message;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCountry()
    {
       if (is_null($this->country)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MatchingPriceNotFoundError::FIELD_COUNTRY);
           if (is_null($data)) {
               return null;
           }
           $this->country = (string)$data;
       }
       return $this->country;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProductId()
    {
       if (is_null($this->productId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MatchingPriceNotFoundError::FIELD_PRODUCT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->productId = (string)$data;
       }
       return $this->productId;
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       if (is_null($this->customerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MatchingPriceNotFoundError::FIELD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->customerGroup = CustomerGroupReferenceModel::of($data);
       }
       return $this->customerGroup;
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getChannel()
    {
       if (is_null($this->channel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MatchingPriceNotFoundError::FIELD_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->channel = ChannelReferenceModel::of($data);
       }
       return $this->channel;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCurrency()
    {
       if (is_null($this->currency)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MatchingPriceNotFoundError::FIELD_CURRENCY);
           if (is_null($data)) {
               return null;
           }
           $this->currency = (string)$data;
       }
       return $this->currency;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MatchingPriceNotFoundError::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
    
    final public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }
    
    final public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
    
    final public function setChannel(?ChannelReference $channel): void
    {
        $this->channel = $channel;
    }
    
    final public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
}