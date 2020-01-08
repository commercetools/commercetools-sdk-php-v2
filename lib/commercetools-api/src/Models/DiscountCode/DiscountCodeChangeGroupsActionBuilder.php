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
     * @var ?array
     */
    private $groups;

    /**
     * <p>The groups to which this discount code shall belong to.
     * Use empty array to remove the code from all groups.</p>.
     *
     * @return null|array
     */
    public function getGroups()
    {
        return $this->groups;
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
            $this->groups
        );
    }

    public static function of(): DiscountCodeChangeGroupsActionBuilder
    {
        return new self();
    }
}
