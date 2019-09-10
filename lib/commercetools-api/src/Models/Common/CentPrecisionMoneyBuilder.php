<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CentPrecisionMoney>
 */
final class CentPrecisionMoneyBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $centAmount;
    
    /**
     * @var ?int
     */
    protected $fractionDigits;
    
    /**
     * @var ?string
     */
    protected $type;
    
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
       return $this->centAmount;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getFractionDigits()
    {
       return $this->fractionDigits;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
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
    final public function withCentAmount(?int $centAmount)
    {
        $this->centAmount = $centAmount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFractionDigits(?int $fractionDigits)
    {
        $this->fractionDigits = $fractionDigits;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
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
    
    public function build(): CentPrecisionMoney {
        return new CentPrecisionMoneyModel(
            $this->centAmount,
            $this->fractionDigits,
            $this->type,
            $this->currencyCode
        );
    }
    
    public static function of(): CentPrecisionMoneyBuilder
    {
        return new self();
    }
}