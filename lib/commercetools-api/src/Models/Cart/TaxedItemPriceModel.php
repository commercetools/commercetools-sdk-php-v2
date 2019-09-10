<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;

final class TaxedItemPriceModel extends JsonObjectModel implements TaxedItemPrice
{
    
    public function __construct(
        TypedMoney $totalGross = null,
        TypedMoney $totalNet = null
    ) {
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
        
    }

    /**
     * @var ?TypedMoney
     */
    protected $totalGross;
    
    /**
     * @var ?TypedMoney
     */
    protected $totalNet;

    /**
     *
     * @return TypedMoney|null
     */
    final public function getTotalGross()
    {
       if (is_null($this->totalGross)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TaxedItemPrice::FIELD_TOTAL_GROSS);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->totalGross = $className::of($data);
       }
       return $this->totalGross;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getTotalNet()
    {
       if (is_null($this->totalNet)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TaxedItemPrice::FIELD_TOTAL_NET);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->totalNet = $className::of($data);
       }
       return $this->totalNet;
    }
    final public function setTotalGross(?TypedMoney $totalGross): void
    {
        $this->totalGross = $totalGross;
    }
    
    final public function setTotalNet(?TypedMoney $totalNet): void
    {
        $this->totalNet = $totalNet;
    }
    
}