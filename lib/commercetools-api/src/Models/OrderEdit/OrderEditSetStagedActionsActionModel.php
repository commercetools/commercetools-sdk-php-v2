<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEditSetStagedActionsActionModel extends JsonObjectModel implements OrderEditSetStagedActionsAction
{
    public const DISCRIMINATOR_VALUE = 'setStagedActions';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StagedOrderUpdateActionCollection
     */
    protected $stagedActions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StagedOrderUpdateActionCollection $stagedActions = null,
        ?string $action = null
    ) {
        $this->stagedActions = $stagedActions;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The actions to edit the <code>resource</code>.</p>
     *
     *
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions()
    {
        if (is_null($this->stagedActions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STAGED_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->stagedActions = StagedOrderUpdateActionCollection::fromArray($data);
        }

        return $this->stagedActions;
    }


    /**
     * @param ?StagedOrderUpdateActionCollection $stagedActions
     */
    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void
    {
        $this->stagedActions = $stagedActions;
    }
}
