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
 * @implements Builder<InvalidInputError>
 */
final class InvalidInputErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p>Description of the constraints that are not met by the request. For example, <code>&quot;Invalid $propertyName. It may be a non-empty string up to $maxLength&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
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


    public function build(): InvalidInputError
    {
        return new InvalidInputErrorModel(
            $this->message
        );
    }

    public static function of(): InvalidInputErrorBuilder
    {
        return new self();
    }
}
