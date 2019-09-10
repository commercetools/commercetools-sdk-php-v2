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


final class PriceFunctionModel extends JsonObjectModel implements PriceFunction
{
    
    public function __construct(
        string $function = null,
        string $currencyCode = null
    ) {
        $this->function = $function;
        $this->currencyCode = $currencyCode;
        
    }

    /**
     * @var ?string
     */
    protected $function;
    
    /**
     * @var ?string
     */
    protected $currencyCode;

    /**
     *
     * @return string|null
     */
    final public function getFunction()
    {
       if (is_null($this->function)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PriceFunction::FIELD_FUNCTION);
           if (is_null($data)) {
               return null;
           }
           $this->function = (string)$data;
       }
       return $this->function;
    }
    
    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     * @return string|null
     */
    final public function getCurrencyCode()
    {
       if (is_null($this->currencyCode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PriceFunction::FIELD_CURRENCY_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->currencyCode = (string)$data;
       }
       return $this->currencyCode;
    }
    final public function setFunction(?string $function): void
    {
        $this->function = $function;
    }
    
    final public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }
    
}