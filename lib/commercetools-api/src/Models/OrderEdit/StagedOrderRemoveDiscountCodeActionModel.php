<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderRemoveDiscountCodeActionModel extends JsonObjectModel implements StagedOrderRemoveDiscountCodeAction
{
    const DISCRIMINATOR_VALUE = 'removeDiscountCode';
    public function __construct(
        string $action = null,
        DiscountCodeReference $discountCode = null
    ) {
        $this->action = $action;
        $this->discountCode = $discountCode;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DiscountCodeReference
     */
    protected $discountCode;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return DiscountCodeReference|null
     */
    final public function getDiscountCode()
    {
       if (is_null($this->discountCode)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderRemoveDiscountCodeAction::FIELD_DISCOUNT_CODE);
           if (is_null($data)) {
               return null;
           }
           
           $this->discountCode = DiscountCodeReferenceModel::of($data);
       }
       return $this->discountCode;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }
    
}