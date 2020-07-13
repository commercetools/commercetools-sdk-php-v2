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
 * @implements Builder<InvalidItemShippingDetailsError>
 */
final class InvalidItemShippingDetailsErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $subject;

    /**
     * @var ?string
     */
    private $itemId;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return null|string
     */
    public function getItemId()
    {
        return $this->itemId;
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
     * @param ?string $subject
     * @return $this
     */
    public function withSubject(?string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @param ?string $itemId
     * @return $this
     */
    public function withItemId(?string $itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }


    public function build(): InvalidItemShippingDetailsError
    {
        return new InvalidItemShippingDetailsErrorModel(
            $this->message,
            $this->subject,
            $this->itemId
        );
    }

    public static function of(): InvalidItemShippingDetailsErrorBuilder
    {
        return new self();
    }
}
