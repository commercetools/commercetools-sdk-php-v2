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
 * @implements Builder<InvalidTokenError>
 */
final class InvalidTokenErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p>Plain text description of the cause of the error.</p>
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


    public function build(): InvalidTokenError
    {
        return new InvalidTokenErrorModel(
            $this->message
        );
    }

    public static function of(): InvalidTokenErrorBuilder
    {
        return new self();
    }
}
