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
 * @implements Builder<MissingTaxRateForCountryError>
 */
final class MissingTaxRateForCountryErrorBuilder implements Builder
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
     * @var ?string
     */
    protected $country;
    
    /**
     * @var ?string
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $taxCategoryId;

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
     * @return string|null
     */
    final public function getCountry()
    {
       return $this->country;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTaxCategoryId()
    {
       return $this->taxCategoryId;
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
    final public function withCountry(?string $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?string $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategoryId(?string $taxCategoryId)
    {
        $this->taxCategoryId = $taxCategoryId;
        
        return $this;
    }
    
    public function build(): MissingTaxRateForCountryError {
        return new MissingTaxRateForCountryErrorModel(
            $this->code,
            $this->message,
            $this->country,
            $this->state,
            $this->taxCategoryId
        );
    }
    
    public static function of(): MissingTaxRateForCountryErrorBuilder
    {
        return new self();
    }
}