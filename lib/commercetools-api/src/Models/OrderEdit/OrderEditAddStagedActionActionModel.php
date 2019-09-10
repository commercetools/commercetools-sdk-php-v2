<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderEditAddStagedActionActionModel extends JsonObjectModel implements OrderEditAddStagedActionAction
{
    const DISCRIMINATOR_VALUE = 'addStagedAction';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?StagedOrderUpdateAction
     */
    protected $stagedAction;

    public function __construct(
        string $action = null,
        StagedOrderUpdateAction $stagedAction = null
    ) {
        $this->action = $action;
        $this->stagedAction = $stagedAction;
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
     * @return null|StagedOrderUpdateAction
     */
    public function getStagedAction()
    {
        if (is_null($this->stagedAction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderEditAddStagedActionAction::FIELD_STAGED_ACTION);
            if (is_null($data)) {
                return null;
            }
            $className = StagedOrderUpdateActionModel::resolveDiscriminatorClass($data);
            $this->stagedAction = $className::of($data);
        }

        return $this->stagedAction;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setStagedAction(?StagedOrderUpdateAction $stagedAction): void
    {
        $this->stagedAction = $stagedAction;
    }
}
