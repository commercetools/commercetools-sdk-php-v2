<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeChangeGroupsAction>
 */
final class DiscountCodeChangeGroupsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $groups;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withGroups(?array $groups)
    {
        $this->groups = $groups;

        return $this;
    }

    public function build(): DiscountCodeChangeGroupsAction
    {
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
