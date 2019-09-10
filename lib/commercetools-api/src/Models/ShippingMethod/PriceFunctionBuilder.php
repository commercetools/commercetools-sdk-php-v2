<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PriceFunction>
 */
final class PriceFunctionBuilder implements Builder
{
    public function __construct() {
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
       return $this->function;
    }
    
    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     * @return string|null
     */
    final public function getCurrencyCode()
    {
       return $this->currencyCode;
    }
    /**
     * @return $this
     */
    final public function withFunction(?string $function)
    {
        $this->function = $function;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        
        return $this;
    }
    
    public function build(): PriceFunction {
        return new PriceFunctionModel(
            $this->function,
            $this->currencyCode
        );
    }
    
    public static function of(): PriceFunctionBuilder
    {
        return new self();
    }
}