<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\ChangeHistory\ErrorObject;
use Commercetools\History\Models\ChangeHistory\ErrorObjectBuilder;

/**
 * @implements Builder<TooManyRequestsError>
 */
final class TooManyRequestsErrorBuilder implements Builder
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
     * <p><code>&quot;TooManyRequests&quot;</code></p>
     *

     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <p><code>&quot;You have made too many requests. Please try again later.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param ?string $code
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
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


    public function build(): TooManyRequestsError
    {
        return new TooManyRequestsErrorModel(
            $this->code,
            $this->message
        );
    }

    public static function of(): TooManyRequestsErrorBuilder
    {
        return new self();
    }
}
