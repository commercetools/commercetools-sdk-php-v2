<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class MoneyModel extends JsonObjectModel implements Money
{
    
    public function __construct(
        int $centAmount = null,
        string $currencyCode = null
    ) {
        $this->centAmount = $centAmount;
        $this->currencyCode = $currencyCode;
        
    }

    /**
     * @var ?int
     */
    protected $centAmount;
    
    /**
     * @var ?string
     */
    protected $currencyCode;

    /**
     *
     * @return int|null
     */
    final public function getCentAmount()
    {
       if (is_null($this->centAmount)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(Money::FIELD_CENT_AMOUNT);
           if (is_null($data)) {
               return null;
           }
           $this->centAmount = (int)$data;
       }
       return $this->centAmount;
    }
    
    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     * @return string|null
     */
    final public function getCurrencyCode()
    {
       if (is_null($this->currencyCode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Money::FIELD_CURRENCY_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->currencyCode = (string)$data;
       }
       return $this->currencyCode;
    }
    final public function setCentAmount(?int $centAmount): void
    {
        $this->centAmount = $centAmount;
    }
    
    final public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }
    
}