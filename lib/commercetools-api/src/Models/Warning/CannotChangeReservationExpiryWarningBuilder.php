<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CannotChangeReservationExpiryWarning>
 */
final class CannotChangeReservationExpiryWarningBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $lineItemId;

    /**
     * <p><code>&quot;The reservation expiration for line item $lineItemId cannot be changed.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The ID of the Line Item.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }


    public function build(): CannotChangeReservationExpiryWarning
    {
        return new CannotChangeReservationExpiryWarningModel(
            $this->message,
            $this->lineItemId
        );
    }

    public static function of(): CannotChangeReservationExpiryWarningBuilder
    {
        return new self();
    }
}
