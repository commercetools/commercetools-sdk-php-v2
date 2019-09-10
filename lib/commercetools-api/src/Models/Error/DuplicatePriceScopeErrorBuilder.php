<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\PriceCollection;

/**
 * @implements Builder<DuplicatePriceScopeError>
 */
final class DuplicatePriceScopeErrorBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $message;
    
    /**
     * @var ?PriceCollection
     */
    protected $conflictingPrices;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       return $this->message;
    }
    
    /**
     *
     * @return PriceCollection|null
     */
    final public function getConflictingPrices()
    {
       return $this->conflictingPrices;
    }
    /**
     * @return $this
     */
    final public function withCode(?string $code)
    {
        $this->code = $code;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessage(?string $message)
    {
        $this->message = $message;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withConflictingPrices(?PriceCollection $conflictingPrices)
    {
        $this->conflictingPrices = $conflictingPrices;
        
        return $this;
    }
    
    public function build(): DuplicatePriceScopeError {
        return new DuplicatePriceScopeErrorModel(
            $this->code,
            $this->message,
            $this->conflictingPrices
        );
    }
    
    public static function of(): DuplicatePriceScopeErrorBuilder
    {
        return new self();
    }
}