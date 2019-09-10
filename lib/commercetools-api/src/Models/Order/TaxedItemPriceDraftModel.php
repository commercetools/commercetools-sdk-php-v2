<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class TaxedItemPriceDraftModel extends JsonObjectModel implements TaxedItemPriceDraft
{
    
    public function __construct(
        Money $totalGross = null,
        Money $totalNet = null
    ) {
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
        
    }

    /**
     * @var ?Money
     */
    protected $totalGross;
    
    /**
     * @var ?Money
     */
    protected $totalNet;

    /**
     *
     * @return Money|null
     */
    final public function getTotalGross()
    {
       if (is_null($this->totalGross)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TaxedItemPriceDraft::FIELD_TOTAL_GROSS);
           if (is_null($data)) {
               return null;
           }
           
           $this->totalGross = MoneyModel::of($data);
       }
       return $this->totalGross;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalNet()
    {
       if (is_null($this->totalNet)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TaxedItemPriceDraft::FIELD_TOTAL_NET);
           if (is_null($data)) {
               return null;
           }
           
           $this->totalNet = MoneyModel::of($data);
       }
       return $this->totalNet;
    }
    final public function setTotalGross(?Money $totalGross): void
    {
        $this->totalGross = $totalGross;
    }
    
    final public function setTotalNet(?Money $totalNet): void
    {
        $this->totalNet = $totalNet;
    }
    
}