<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderFailureError>
 */
final class RecurringOrderFailureErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var null|mixed|mixed
     */
    private $details;

    /**
     * <p>Plain text description of the error.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Details about the error's cause and the entities involved.</p>
     *

     * @return null|mixed
     */
    public function getDetails()
    {
        return $this->details;
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
     * @param mixed $details
     * @return $this
     */
    public function withDetails($details)
    {
        $this->details = $details;

        return $this;
    }


    public function build(): RecurringOrderFailureError
    {
        return new RecurringOrderFailureErrorModel(
            $this->message,
            $this->details
        );
    }

    public static function of(): RecurringOrderFailureErrorBuilder
    {
        return new self();
    }
}
