<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\MoneyCollection;

final class ProductDiscountValueAbsoluteModel extends JsonObjectModel implements ProductDiscountValueAbsolute
{
    const DISCRIMINATOR_VALUE = 'absolute';
    public function __construct(
        string $type = null,
        MoneyCollection $money = null
    ) {
        $this->type = $type;
        $this->money = $money;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?MoneyCollection
     */
    protected $money;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscountValue::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return MoneyCollection|null
     */
    final public function getMoney()
    {
       if (is_null($this->money)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductDiscountValueAbsolute::FIELD_MONEY);
           if (is_null($data)) {
               return null;
           }
           $this->money = MoneyCollection::fromArray($data);
       }
       return $this->money;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setMoney(?MoneyCollection $money): void
    {
        $this->money = $money;
    }
    
}