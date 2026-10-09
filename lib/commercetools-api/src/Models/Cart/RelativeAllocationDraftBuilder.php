<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RelativeAllocationDraft>
 */
final class RelativeAllocationDraftBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $percentage;

    /**
     * <p>Percentage of the Order total allocated to the Payment Method. For example, <code>100</code> allocates the entire Order total.</p>
     *

     * @return null|int
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param ?int $percentage
     * @return $this
     */
    public function withPercentage(?int $percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }


    public function build(): RelativeAllocationDraft
    {
        return new RelativeAllocationDraftModel(
            $this->percentage
        );
    }

    public static function of(): RelativeAllocationDraftBuilder
    {
        return new self();
    }
}
