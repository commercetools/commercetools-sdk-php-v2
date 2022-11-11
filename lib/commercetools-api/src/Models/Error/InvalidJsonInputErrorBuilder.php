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
 * @implements Builder<InvalidJsonInputError>
 */
final class InvalidJsonInputErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $detailedErrorMessage;

    /**
     * <p><code>&quot;Request body does not contain valid JSON.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Further explanation about why the JSON is invalid.</p>
     *

     * @return null|string
     */
    public function getDetailedErrorMessage()
    {
        return $this->detailedErrorMessage;
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
     * @param ?string $detailedErrorMessage
     * @return $this
     */
    public function withDetailedErrorMessage(?string $detailedErrorMessage)
    {
        $this->detailedErrorMessage = $detailedErrorMessage;

        return $this;
    }


    public function build(): InvalidJsonInputError
    {
        return new InvalidJsonInputErrorModel(
            $this->message,
            $this->detailedErrorMessage
        );
    }

    public static function of(): InvalidJsonInputErrorBuilder
    {
        return new self();
    }
}
