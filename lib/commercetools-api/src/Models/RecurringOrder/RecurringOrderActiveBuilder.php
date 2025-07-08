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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<RecurringOrderActive>
 */
final class RecurringOrderActiveBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $resumesAt;

    /**
     * <p>If set, the Recurring Order will automatically resume at the date and time (UTC) specified.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getResumesAt()
    {
        return $this->resumesAt;
    }

    /**
     * @param ?DateTimeImmutable $resumesAt
     * @return $this
     */
    public function withResumesAt(?DateTimeImmutable $resumesAt)
    {
        $this->resumesAt = $resumesAt;

        return $this;
    }


    public function build(): RecurringOrderActive
    {
        return new RecurringOrderActiveModel(
            $this->resumesAt
        );
    }

    public static function of(): RecurringOrderActiveBuilder
    {
        return new self();
    }
}
