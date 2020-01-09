<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class SubscriptionSetChangesActionModel extends JsonObjectModel implements SubscriptionSetChangesAction
{
    const DISCRIMINATOR_VALUE = 'setChanges';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ChangeSubscriptionCollection
     */
    protected $changes;

    public function __construct(
        ChangeSubscriptionCollection $changes = null
    ) {
        $this->changes = $changes;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SubscriptionUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
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

    public function setChanges(?ChangeSubscriptionCollection $changes): void
    {
        $this->changes = $changes;
    }
}
