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

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftModel;

final class ProductChangePriceActionModel extends JsonObjectModel implements ProductChangePriceAction
{
    const DISCRIMINATOR_VALUE = 'changePrice';
    public function __construct(
        string $action = null,
        PriceDraft $price = null,
        bool $staged = null,
        string $priceId = null
    ) {
        $this->action = $action;
        $this->price = $price;
        $this->staged = $staged;
        $this->priceId = $priceId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?PriceDraft
     */
    protected $price;
    
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
     * @return PriceDraft|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductChangePriceAction::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = PriceDraftModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductChangePriceAction::FIELD_STAGED);
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
           $data = $this->raw(ProductChangePriceAction::FIELD_PRICE_ID);
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
    
    final public function setPrice(?PriceDraft $price): void
    {
        $this->price = $price;
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