<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class DiscountCodeSetMaxApplicationsActionModel extends JsonObjectModel implements DiscountCodeSetMaxApplicationsAction
{
    const DISCRIMINATOR_VALUE = 'setMaxApplications';
    public function __construct(
        string $action = null,
        int $maxApplications = null
    ) {
        $this->action = $action;
        $this->maxApplications = $maxApplications;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $maxApplications;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getMaxApplications()
    {
       if (is_null($this->maxApplications)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(DiscountCodeSetMaxApplicationsAction::FIELD_MAX_APPLICATIONS);
           if (is_null($data)) {
               return null;
           }
           $this->maxApplications = (int)$data;
       }
       return $this->maxApplications;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMaxApplications(?int $maxApplications): void
    {
        $this->maxApplications = $maxApplications;
    }
    
}