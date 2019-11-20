<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

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
    private $itemId;

    /**
     * @var ?string
     */
    private $subject;

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
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return null|string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItemId(?string $itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSubject(?string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function build(): InvalidItemShippingDetailsError
    {
        return new InvalidItemShippingDetailsErrorModel(
            $this->message,
            $this->itemId,
            $this->subject
        );
    }

    public static function of(): InvalidItemShippingDetailsErrorBuilder
    {
        return new self();
    }
}
