<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderEditSetStagedActionsActionModel extends JsonObjectModel implements OrderEditSetStagedActionsAction
{
    const DISCRIMINATOR_VALUE = 'setStagedActions';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?StagedOrderUpdateActionCollection
     */
    protected $stagedActions;

    public function __construct(
        string $action = null,
        StagedOrderUpdateActionCollection $stagedActions = null
    ) {
        $this->action = $action;
        $this->stagedActions = $stagedActions;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderEditUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions()
    {
        if (is_null($this->stagedActions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(OrderEditSetStagedActionsAction::FIELD_STAGED_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->stagedActions = StagedOrderUpdateActionCollection::fromArray($data);
        }

        return $this->stagedActions;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void
    {
        $this->stagedActions = $stagedActions;
    }
}
