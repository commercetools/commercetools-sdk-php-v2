<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;

final class DiscountCodeInfoModel extends JsonObjectModel implements DiscountCodeInfo
{
    
    public function __construct(
        DiscountCodeReference $discountCode = null,
        string $state = null
    ) {
        $this->discountCode = $discountCode;
        $this->state = $state;
        
    }

    /**
     * @var ?DiscountCodeReference
     */
    protected $discountCode;
    
    /**
     * @var ?string
     */
    protected $state;

    /**
     *
     * @return DiscountCodeReference|null
     */
    final public function getDiscountCode()
    {
       if (is_null($this->discountCode)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountCodeInfo::FIELD_DISCOUNT_CODE);
           if (is_null($data)) {
               return null;
           }
           
           $this->discountCode = DiscountCodeReferenceModel::of($data);
       }
       return $this->discountCode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DiscountCodeInfo::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->state = (string)$data;
       }
       return $this->state;
    }
    final public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }
    
    final public function setState(?string $state): void
    {
        $this->state = $state;
    }
    
}