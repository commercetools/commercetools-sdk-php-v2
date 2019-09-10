<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class TaxCategorySetDescriptionActionModel extends JsonObjectModel implements TaxCategorySetDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setDescription';
    public function __construct(
        string $action = null,
        string $description = null
    ) {
        $this->action = $action;
        $this->description = $description;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $description;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TaxCategoryUpdateAction::FIELD_ACTION);
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
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TaxCategorySetDescriptionAction::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           $this->description = (string)$data;
       }
       return $this->description;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    
}