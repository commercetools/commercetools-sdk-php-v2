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
 * @implements Builder<DiscountCodeSetMaxApplicationsAction>
 */
final class DiscountCodeSetMaxApplicationsActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $maxApplications;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|int
     */
    public function getMaxApplications()
    {
        return $this->maxApplications;
    }

    /**
     * @param ?int $maxApplications
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
