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
 * @implements Builder<LockedFieldError>
 */
final class LockedFieldErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $field;

    /**
     * <p><code>&quot;'$field' is locked by another request. Please try again later.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Field that is currently locked.</p>
     *

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
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
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }


    public function build(): LockedFieldError
    {
        return new LockedFieldErrorModel(
            $this->message,
            $this->field
        );
    }

    public static function of(): LockedFieldErrorBuilder
    {
        return new self();
    }
}
