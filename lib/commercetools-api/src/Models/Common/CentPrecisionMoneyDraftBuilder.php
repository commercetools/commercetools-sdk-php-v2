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
 * @implements Builder<CentPrecisionMoneyDraft>
 */
final class CentPrecisionMoneyDraftBuilder implements Builder
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
    
    public function build(): CentPrecisionMoneyDraft {
        return new CentPrecisionMoneyDraftModel(
            $this->centAmount,
            $this->currencyCode,
            $this->type
        );
    }
    
    public static function of(): CentPrecisionMoneyDraftBuilder
    {
        return new self();
    }
}