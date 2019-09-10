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

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class TaxedPriceModel extends JsonObjectModel implements TaxedPrice
{
    
    public function __construct(
        TaxPortionCollection $taxPortions = null,
        Money $totalGross = null,
        Money $totalNet = null
    ) {
        $this->taxPortions = $taxPortions;
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
        
    }

    /**
     * @var ?TaxPortionCollection
     */
    protected $taxPortions;
    
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
     * @return TaxPortionCollection|null
     */
    final public function getTaxPortions()
    {
       if (is_null($this->taxPortions)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(TaxedPrice::FIELD_TAX_PORTIONS);
           if (is_null($data)) {
               return null;
           }
           $this->taxPortions = TaxPortionCollection::fromArray($data);
       }
       return $this->taxPortions;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalGross()
    {
       if (is_null($this->totalGross)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TaxedPrice::FIELD_TOTAL_GROSS);
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
           $data = $this->raw(TaxedPrice::FIELD_TOTAL_NET);
           if (is_null($data)) {
               return null;
           }
           
           $this->totalNet = MoneyModel::of($data);
       }
       return $this->totalNet;
    }
    final public function setTaxPortions(?TaxPortionCollection $taxPortions): void
    {
        $this->taxPortions = $taxPortions;
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