<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>New value to set. An empty array removes the DiscountCode from all groups.</p>
     *

     * @return null|array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param ?array $groups
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
