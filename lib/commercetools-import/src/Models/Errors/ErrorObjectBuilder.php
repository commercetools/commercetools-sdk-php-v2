<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ErrorObject>
 */
final class ErrorObjectBuilder implements Builder
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


    public function build(): ErrorObject
    {
        return new ErrorObjectModel(
            $this->message
        );
    }

    public static function of(): ErrorObjectBuilder
    {
        return new self();
    }
}
