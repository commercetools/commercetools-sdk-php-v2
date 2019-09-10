<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeChangeGroupsAction>
 */
final class DiscountCodeChangeGroupsActionBuilder implements Builder
{
    public function __construct() {
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
       return $this->action;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getGroups()
    {
       return $this->groups;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withGroups(?array $groups)
    {
        $this->groups = $groups;
        
        return $this;
    }
    
    public function build(): DiscountCodeChangeGroupsAction {
        return new DiscountCodeChangeGroupsActionModel(
            $this->action,
            $this->groups
        );
    }
    
    public static function of(): DiscountCodeChangeGroupsActionBuilder
    {
        return new self();
    }
}