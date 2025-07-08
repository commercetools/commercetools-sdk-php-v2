<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CounterDraft>
 */
final class CounterDraftBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $totalToSkip;

    /**
     * <p>Number of Orders that will be skipped.</p>
     *

     * @return null|int
     */
    public function getTotalToSkip()
    {
        return $this->totalToSkip;
    }

    /**
     * @param ?int $totalToSkip
     * @return $this
     */
    public function withTotalToSkip(?int $totalToSkip)
    {
        $this->totalToSkip = $totalToSkip;

        return $this;
    }


    public function build(): CounterDraft
    {
        return new CounterDraftModel(
            $this->totalToSkip
        );
    }

    public static function of(): CounterDraftBuilder
    {
        return new self();
    }
}
