<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceModel;

final class ProductSetDiscountedPriceActionModel extends JsonObjectModel implements ProductSetDiscountedPriceAction
{
    const DISCRIMINATOR_VALUE = 'setDiscountedPrice';
    public function __construct(
        string $action = null,
        DiscountedPrice $discounted = null,
        bool $staged = null,
        string $priceId = null
    ) {
        $this->action = $action;
        $this->discounted = $discounted;
        $this->staged = $staged;
        $this->priceId = $priceId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DiscountedPrice
     */
    protected $discounted;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?string
     */
    protected $priceId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return DiscountedPrice|null
     */
    final public function getDiscounted()
    {
       if (is_null($this->discounted)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductSetDiscountedPriceAction::FIELD_DISCOUNTED);
           if (is_null($data)) {
               return null;
           }
           
           $this->discounted = DiscountedPriceModel::of($data);
       }
       return $this->discounted;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductSetDiscountedPriceAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPriceId()
    {
       if (is_null($this->priceId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductSetDiscountedPriceAction::FIELD_PRICE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->priceId = (string)$data;
       }
       return $this->priceId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }
    
}