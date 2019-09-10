<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubRate>
 */
final class SubRateBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $amount;
    
    /**
     * @var ?string
     */
    protected $name;

    /**
     *
     * @return int|null
     */
    final public function getAmount()
    {
       return $this->amount;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    /**
     * @return $this
     */
    final public function withAmount(?int $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function build(): SubRate {
        return new SubRateModel(
            $this->amount,
            $this->name
        );
    }
    
    public static function of(): SubRateBuilder
    {
        return new self();
    }
}