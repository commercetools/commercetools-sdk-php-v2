<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReferenceExistsError>
 */
final class ReferenceExistsErrorBuilder implements Builder
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
    private $referencedBy;

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
     * @return null|string
     */
    public function getReferencedBy()
    {
        return $this->referencedBy;
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
    public function withReferencedBy(?string $referencedBy)
    {
        $this->referencedBy = $referencedBy;

        return $this;
    }

    public function build(): ReferenceExistsError
    {
        return new ReferenceExistsErrorModel(
            $this->code,
            $this->message,
            $this->referencedBy
        );
    }

    public static function of(): ReferenceExistsErrorBuilder
    {
        return new self();
    }
}
