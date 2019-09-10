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

final class CartScoreTierModel extends JsonObjectModel implements CartScoreTier
{
    const DISCRIMINATOR_VALUE = 'CartScore';
    public function __construct(
        string $type = null,
        int $score = null,
        Money $price = null,
        bool $isMatching = null,
        PriceFunction $priceFunction = null
    ) {
        $this->type = $type;
        $this->score = $score;
        $this->price = $price;
        $this->isMatching = $isMatching;
        $this->priceFunction = $priceFunction;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?int
     */
    protected $score;
    
    /**
     * @var ?Money
     */
    protected $price;
    
    /**
     * @var ?bool
     */
    protected $isMatching;
    
    /**
     * @var ?PriceFunction
     */
    protected $priceFunction;

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
     * @return int|null
     */
    final public function getScore()
    {
       if (is_null($this->score)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CartScoreTier::FIELD_SCORE);
           if (is_null($data)) {
               return null;
           }
           $this->score = (int)$data;
       }
       return $this->score;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartScoreTier::FIELD_PRICE);
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
           $data = $this->raw(CartScoreTier::FIELD_IS_MATCHING);
           if (is_null($data)) {
               return null;
           }
           $this->isMatching = (bool)$data;
       }
       return $this->isMatching;
    }
    
    /**
     *
     * @return PriceFunction|null
     */
    final public function getPriceFunction()
    {
       if (is_null($this->priceFunction)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartScoreTier::FIELD_PRICE_FUNCTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->priceFunction = PriceFunctionModel::of($data);
       }
       return $this->priceFunction;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setScore(?int $score): void
    {
        $this->score = $score;
    }
    
    final public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }
    
    final public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }
    
    final public function setPriceFunction(?PriceFunction $priceFunction): void
    {
        $this->priceFunction = $priceFunction;
    }
    
}