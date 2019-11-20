<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InvalidOperationError>
 */
final class InvalidOperationErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    public function build(): InvalidOperationError
    {
        return new InvalidOperationErrorModel(
            $this->message
        );
    }

    public static function of(): InvalidOperationErrorBuilder
    {
        return new self();
    }
}
