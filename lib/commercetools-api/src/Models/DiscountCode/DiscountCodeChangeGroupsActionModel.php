<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObjectModel;

final class DiscountCodeChangeGroupsActionModel extends JsonObjectModel implements DiscountCodeChangeGroupsAction
{
    const DISCRIMINATOR_VALUE = 'changeGroups';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $groups;

    public function __construct(
        array $groups = null
    ) {
        $this->groups = $groups;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The groups to which this discount code shall belong to.
     * Use empty array to remove the code from all groups.</p>.
     *
     * @return null|array
     */
    public function getGroups()
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

    public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
    }
}
