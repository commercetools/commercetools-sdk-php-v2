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


final class PriceTierModel extends JsonObjectModel implements PriceTier
{
    
    public function __construct(
        Money $value = null,
        int $minimumQuantity = null
    ) {
        $this->value = $value;
        $this->minimumQuantity = $minimumQuantity;
        
    }

    /**
     * @var ?Money
     */
    protected $value;
    
    /**
     * @var ?int
     */
    protected $minimumQuantity;

    /**
     *
     * @return Money|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PriceTier::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           
           $this->value = MoneyModel::of($data);
       }
       return $this->value;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getMinimumQuantity()
    {
       if (is_null($this->minimumQuantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(PriceTier::FIELD_MINIMUM_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->minimumQuantity = (int)$data;
       }
       return $this->minimumQuantity;
    }
    final public function setValue(?Money $value): void
    {
        $this->value = $value;
    }
    
    final public function setMinimumQuantity(?int $minimumQuantity): void
    {
        $this->minimumQuantity = $minimumQuantity;
    }
    
}