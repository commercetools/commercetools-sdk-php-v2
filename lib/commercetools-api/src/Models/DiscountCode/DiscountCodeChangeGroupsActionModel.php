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


final class DiscountCodeChangeGroupsActionModel extends JsonObjectModel implements DiscountCodeChangeGroupsAction
{
    const DISCRIMINATOR_VALUE = 'changeGroups';
    public function __construct(
        string $action = null,
        array $groups = null
    ) {
        $this->action = $action;
        $this->groups = $groups;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $groups;

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
     * @return array|null
     */
    final public function getGroups()
    {
       if (is_null($this->groups)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(DiscountCodeChangeGroupsAction::FIELD_GROUPS);
           if (is_null($data)) {
               return null;
           }
           $this->groups = $data;
       }
       return $this->groups;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
    }
    
}