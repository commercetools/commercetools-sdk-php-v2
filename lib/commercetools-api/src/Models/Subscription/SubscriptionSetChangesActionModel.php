<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class SubscriptionSetChangesActionModel extends JsonObjectModel implements SubscriptionSetChangesAction
{
    const DISCRIMINATOR_VALUE = 'setChanges';
    public function __construct(
        string $action = null,
        ChangeSubscriptionCollection $changes = null
    ) {
        $this->action = $action;
        $this->changes = $changes;
        
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SubscriptionUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ChangeSubscriptionCollection|null
     */
    final public function getChanges()
    {
       if (is_null($this->changes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(SubscriptionSetChangesAction::FIELD_CHANGES);
           if (is_null($data)) {
               return null;
           }
           $this->changes = ChangeSubscriptionCollection::fromArray($data);
       }
       return $this->changes;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setChanges(?ChangeSubscriptionCollection $changes): void
    {
        $this->changes = $changes;
    }
    
}