<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomerSetTitleActionModel extends JsonObjectModel implements CustomerSetTitleAction
{
    const DISCRIMINATOR_VALUE = 'setTitle';
    public function __construct(
        string $action = null,
        string $title = null
    ) {
        $this->action = $action;
        $this->title = $title;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $title;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
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
    final public function getTitle()
    {
       if (is_null($this->title)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerSetTitleAction::FIELD_TITLE);
           if (is_null($data)) {
               return null;
           }
           $this->title = (string)$data;
       }
       return $this->title;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    
}