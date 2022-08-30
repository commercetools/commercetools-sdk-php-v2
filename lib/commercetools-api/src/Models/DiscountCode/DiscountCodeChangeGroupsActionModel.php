<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountCodeChangeGroupsActionModel extends JsonObjectModel implements DiscountCodeChangeGroupsAction
{
    public const DISCRIMINATOR_VALUE = 'changeGroups';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $groups;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $groups = null,
        ?string $action = null
    ) {
        $this->groups = $groups;
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
     * <p>New value to set. An empty array removes the DiscountCode from all groups.</p>
     *
     *
     * @return null|array
     */
    public function getGroups()
    {
        if (is_null($this->groups)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_GROUPS);
            if (is_null($data)) {
                return null;
            }
            $this->groups = $data;
        }

        return $this->groups;
    }


    /**
     * @param ?array $groups
     */
    public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
    }
}
