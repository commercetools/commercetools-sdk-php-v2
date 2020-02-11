<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InvalidScopeError>
 */
final class InvalidScopeErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * <p>The error's description.</p>
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


    public function build(): InvalidScopeError
    {
        return new InvalidScopeErrorModel(
            $this->message
        );
    }

    public static function of(): InvalidScopeErrorBuilder
    {
        return new self();
    }
}
