<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeSetMaxApplicationsAction>
 */
final class DiscountCodeSetMaxApplicationsActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $maxApplications;

    /**
     * <p>If the <code>maxApplications</code> parameter is not included, the field will be emptied.</p>.
     *
     * @return null|int
     */
    public function getMaxApplications()
    {
        return $this->maxApplications;
    }

    /**
     * @return $this
     */
    public function withMaxApplications(?int $maxApplications)
    {
        $this->maxApplications = $maxApplications;

        return $this;
    }

    public function build(): DiscountCodeSetMaxApplicationsAction
    {
        return new DiscountCodeSetMaxApplicationsActionModel(
            $this->maxApplications
        );
    }

    public static function of(): DiscountCodeSetMaxApplicationsActionBuilder
    {
        return new self();
    }
}
