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

final class CartSetCartTotalTaxActionModel extends JsonObjectModel implements CartSetCartTotalTaxAction
{
    const DISCRIMINATOR_VALUE = 'setCartTotalTax';
    public function __construct(
        string $action = null,
        TaxPortionCollection $externalTaxPortions = null,
        Money $externalTotalGross = null
    ) {
        $this->action = $action;
        $this->externalTaxPortions = $externalTaxPortions;
        $this->externalTotalGross = $externalTotalGross;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?TaxPortionCollection
     */
    protected $externalTaxPortions;
    
    /**
     * @var ?Money
     */
    protected $externalTotalGross;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return TaxPortionCollection|null
     */
    final public function getExternalTaxPortions()
    {
       if (is_null($this->externalTaxPortions)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TAX_PORTIONS);
           if (is_null($data)) {
               return null;
           }
           $this->externalTaxPortions = TaxPortionCollection::fromArray($data);
       }
       return $this->externalTaxPortions;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getExternalTotalGross()
    {
       if (is_null($this->externalTotalGross)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TOTAL_GROSS);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTotalGross = MoneyModel::of($data);
       }
       return $this->externalTotalGross;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setExternalTaxPortions(?TaxPortionCollection $externalTaxPortions): void
    {
        $this->externalTaxPortions = $externalTaxPortions;
    }
    
    final public function setExternalTotalGross(?Money $externalTotalGross): void
    {
        $this->externalTotalGross = $externalTotalGross;
    }
    
}