<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InvalidJsonInput>
 */
final class InvalidJsonInputBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * <p>The error's description.</p>.
     *
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

    public function build(): InvalidJsonInput
    {
        return new InvalidJsonInputModel(
            $this->message
        );
    }

    public static function of(): InvalidJsonInputBuilder
    {
        return new self();
    }
}
