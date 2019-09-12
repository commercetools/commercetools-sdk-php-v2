<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ErrorObject>
 */
final class ErrorObjectBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @var ?string
     */
    private $message;

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
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
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

    public function build(): ErrorObject
    {
        return new ErrorObjectModel(
            $this->code,
            $this->message
        );
    }

    public static function of(): ErrorObjectBuilder
    {
        return new self();
    }
}
