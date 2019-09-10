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

/**
 * @implements Builder<PriceChangedError>
 */
final class PriceChangedErrorBuilder implements Builder
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
     * @var ?array
     */
    protected $lineItems;
    
    /**
     * @var ?bool
     */
    protected $shipping;

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
     * @return array|null
     */
    final public function getLineItems()
    {
       return $this->lineItems;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getShipping()
    {
       return $this->shipping;
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
    final public function withLineItems(?array $lineItems)
    {
        $this->lineItems = $lineItems;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShipping(?bool $shipping)
    {
        $this->shipping = $shipping;
        
        return $this;
    }
    
    public function build(): PriceChangedError {
        return new PriceChangedErrorModel(
            $this->code,
            $this->message,
            $this->lineItems,
            $this->shipping
        );
    }
    
    public static function of(): PriceChangedErrorBuilder
    {
        return new self();
    }
}