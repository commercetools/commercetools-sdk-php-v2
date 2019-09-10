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


final class ProductDiscountChangeSortOrderActionModel extends JsonObjectModel implements ProductDiscountChangeSortOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeSortOrder';
    public function __construct(
        string $action = null,
        string $sortOrder = null
    ) {
        $this->action = $action;
        $this->sortOrder = $sortOrder;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $sortOrder;

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
     * @return string|null
     */
    final public function getSortOrder()
    {
       if (is_null($this->sortOrder)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscountChangeSortOrderAction::FIELD_SORT_ORDER);
           if (is_null($data)) {
               return null;
           }
           $this->sortOrder = (string)$data;
       }
       return $this->sortOrder;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
    
}