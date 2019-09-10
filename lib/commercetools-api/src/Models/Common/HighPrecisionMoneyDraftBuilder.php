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
 * @implements Builder<HighPrecisionMoneyDraft>
 */
final class HighPrecisionMoneyDraftBuilder implements Builder
{
    public function __construct() {
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
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?int
     */
    protected $preciseAmount;

    /**
     *
     * @return int|null
     */
    final public function getCentAmount()
    {
       return $this->centAmount;
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
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getPreciseAmount()
    {
       return $this->preciseAmount;
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
    final public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        
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
    final public function withPreciseAmount(?int $preciseAmount)
    {
        $this->preciseAmount = $preciseAmount;
        
        return $this;
    }
    
    public function build(): HighPrecisionMoneyDraft {
        return new HighPrecisionMoneyDraftModel(
            $this->centAmount,
            $this->currencyCode,
            $this->type,
            $this->preciseAmount
        );
    }
    
    public static function of(): HighPrecisionMoneyDraftBuilder
    {
        return new self();
    }
}