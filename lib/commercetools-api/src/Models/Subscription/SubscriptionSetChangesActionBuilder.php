<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubscriptionSetChangesAction>
 */
final class SubscriptionSetChangesActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ChangeSubscriptionCollection
     */
    protected $changes;

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
     * @return ChangeSubscriptionCollection|null
     */
    final public function getChanges()
    {
       return $this->changes;
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
    final public function withChanges(?ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;
        
        return $this;
    }
    
    public function build(): SubscriptionSetChangesAction {
        return new SubscriptionSetChangesActionModel(
            $this->action,
            $this->changes
        );
    }
    
    public static function of(): SubscriptionSetChangesActionBuilder
    {
        return new self();
    }
}