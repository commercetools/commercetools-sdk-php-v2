<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;

/**
 * @implements Builder<RequiredFieldError>
 */
final class RequiredFieldErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $field;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

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
     * <p>The name of the field.</p>.
     *
     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
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
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    public function build(): RequiredFieldError
    {
        return new RequiredFieldErrorModel(
            $this->code,
            $this->message,
            $this->field
        );
    }

    public static function of(): RequiredFieldErrorBuilder
    {
        return new self();
    }
}
