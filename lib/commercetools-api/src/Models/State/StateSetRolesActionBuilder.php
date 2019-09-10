<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StateSetRolesAction>
 */
final class StateSetRolesActionBuilder implements Builder
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
    protected $roles;

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
    final public function getRoles()
    {
       return $this->roles;
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
    final public function withRoles(?array $roles)
    {
        $this->roles = $roles;
        
        return $this;
    }
    
    public function build(): StateSetRolesAction {
        return new StateSetRolesActionModel(
            $this->action,
            $this->roles
        );
    }
    
    public static function of(): StateSetRolesActionBuilder
    {
        return new self();
    }
}