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

final class ShippingRateDraftModel extends JsonObjectModel implements ShippingRateDraft
{
    
    public function __construct(
        ShippingRatePriceTierCollection $tiers = null,
        Money $price = null,
        Money $freeAbove = null
    ) {
        $this->tiers = $tiers;
        $this->price = $price;
        $this->freeAbove = $freeAbove;
        
    }

    /**
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;
    
    /**
     * @var ?Money
     */
    protected $price;
    
    /**
     * @var ?Money
     */
    protected $freeAbove;

    /**
     *
     * @return ShippingRatePriceTierCollection|null
     */
    final public function getTiers()
    {
       if (is_null($this->tiers)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShippingRateDraft::FIELD_TIERS);
           if (is_null($data)) {
               return null;
           }
           $this->tiers = ShippingRatePriceTierCollection::fromArray($data);
       }
       return $this->tiers;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingRateDraft::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = MoneyModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getFreeAbove()
    {
       if (is_null($this->freeAbove)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingRateDraft::FIELD_FREE_ABOVE);
           if (is_null($data)) {
               return null;
           }
           
           $this->freeAbove = MoneyModel::of($data);
       }
       return $this->freeAbove;
    }
    final public function setTiers(?ShippingRatePriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }
    
    final public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }
    
    final public function setFreeAbove(?Money $freeAbove): void
    {
        $this->freeAbove = $freeAbove;
    }
    
}