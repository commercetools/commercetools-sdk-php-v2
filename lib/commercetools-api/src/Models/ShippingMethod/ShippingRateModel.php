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

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;

final class ShippingRateModel extends JsonObjectModel implements ShippingRate
{
    
    public function __construct(
        ShippingRatePriceTierCollection $tiers = null,
        TypedMoney $price = null,
        TypedMoney $freeAbove = null,
        bool $isMatching = null
    ) {
        $this->tiers = $tiers;
        $this->price = $price;
        $this->freeAbove = $freeAbove;
        $this->isMatching = $isMatching;
        
    }

    /**
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;
    
    /**
     * @var ?TypedMoney
     */
    protected $price;
    
    /**
     * @var ?TypedMoney
     */
    protected $freeAbove;
    
    /**
     * @var ?bool
     */
    protected $isMatching;

    /**
     *
     * @return ShippingRatePriceTierCollection|null
     */
    final public function getTiers()
    {
       if (is_null($this->tiers)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShippingRate::FIELD_TIERS);
           if (is_null($data)) {
               return null;
           }
           $this->tiers = ShippingRatePriceTierCollection::fromArray($data);
       }
       return $this->tiers;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingRate::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->price = $className::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getFreeAbove()
    {
       if (is_null($this->freeAbove)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingRate::FIELD_FREE_ABOVE);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->freeAbove = $className::of($data);
       }
       return $this->freeAbove;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsMatching()
    {
       if (is_null($this->isMatching)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ShippingRate::FIELD_IS_MATCHING);
           if (is_null($data)) {
               return null;
           }
           $this->isMatching = (bool)$data;
       }
       return $this->isMatching;
    }
    final public function setTiers(?ShippingRatePriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }
    
    final public function setPrice(?TypedMoney $price): void
    {
        $this->price = $price;
    }
    
    final public function setFreeAbove(?TypedMoney $freeAbove): void
    {
        $this->freeAbove = $freeAbove;
    }
    
    final public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }
    
}