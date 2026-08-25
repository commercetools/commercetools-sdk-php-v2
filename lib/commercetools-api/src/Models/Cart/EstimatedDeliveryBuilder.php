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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<EstimatedDelivery>
 */
final class EstimatedDeliveryBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $from;

    /**

     * @var ?DateTimeImmutable
     */
    private $until;

    /**
     * <p>Date and time (UTC) of the earliest expected delivery.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * <p>Date and time (UTC) of the latest expected delivery.
     * When both <code>from</code> and <code>until</code> are set, <code>until</code> must be equal to or later than <code>from</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param ?DateTimeImmutable $from
     * @return $this
     */
    public function withFrom(?DateTimeImmutable $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $until
     * @return $this
     */
    public function withUntil(?DateTimeImmutable $until)
    {
        $this->until = $until;

        return $this;
    }


    public function build(): EstimatedDelivery
    {
        return new EstimatedDeliveryModel(
            $this->from,
            $this->until
        );
    }

    public static function of(): EstimatedDeliveryBuilder
    {
        return new self();
    }
}
