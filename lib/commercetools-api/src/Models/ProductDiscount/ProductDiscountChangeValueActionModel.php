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


final class ProductDiscountChangeValueActionModel extends JsonObjectModel implements ProductDiscountChangeValueAction
{
    const DISCRIMINATOR_VALUE = 'changeValue';
    public function __construct(
        string $action = null,
        ProductDiscountValue $value = null
    ) {
        $this->action = $action;
        $this->value = $value;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ProductDiscountValue
     */
    protected $value;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscountUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ProductDiscountValue|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductDiscountChangeValueAction::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $className = ProductDiscountValueModel::resolveDiscriminatorClass($data);
           $this->value = $className::of($data);
       }
       return $this->value;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setValue(?ProductDiscountValue $value): void
    {
        $this->value = $value;
    }
    
}