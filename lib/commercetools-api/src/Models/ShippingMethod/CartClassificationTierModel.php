<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class CartClassificationTierModel extends JsonObjectModel implements CartClassificationTier
{
    const DISCRIMINATOR_VALUE = 'CartClassification';
    public function __construct(
        string $type = null,
        Money $price = null,
        bool $isMatching = null,
        string $value = null
    ) {
        $this->type = $type;
        $this->price = $price;
        $this->isMatching = $isMatching;
        $this->value = $value;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Money
     */
    protected $price;
    
    /**
     * @var ?bool
     */
    protected $isMatching;
    
    /**
     * @var ?string
     */
    protected $value;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingRatePriceTier::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartClassificationTier::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = MoneyModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsMatching()
    {
       if (is_null($this->isMatching)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(CartClassificationTier::FIELD_IS_MATCHING);
           if (is_null($data)) {
               return null;
           }
           $this->isMatching = (bool)$data;
       }
       return $this->isMatching;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartClassificationTier::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->value = (string)$data;
       }
       return $this->value;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }
    
    final public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }
    
    final public function setValue(?string $value): void
    {
        $this->value = $value;
    }
    
}