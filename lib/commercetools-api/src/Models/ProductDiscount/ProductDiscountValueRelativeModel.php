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


final class ProductDiscountValueRelativeModel extends JsonObjectModel implements ProductDiscountValueRelative
{
    const DISCRIMINATOR_VALUE = 'relative';
    public function __construct(
        string $type = null,
        int $permyriad = null
    ) {
        $this->type = $type;
        $this->permyriad = $permyriad;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?int
     */
    protected $permyriad;

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
     * @return int|null
     */
    final public function getPermyriad()
    {
       if (is_null($this->permyriad)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductDiscountValueRelative::FIELD_PERMYRIAD);
           if (is_null($data)) {
               return null;
           }
           $this->permyriad = (int)$data;
       }
       return $this->permyriad;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setPermyriad(?int $permyriad): void
    {
        $this->permyriad = $permyriad;
    }
    
}