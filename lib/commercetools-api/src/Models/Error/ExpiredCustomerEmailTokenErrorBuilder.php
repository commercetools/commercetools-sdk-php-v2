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
 * @implements Builder<ExpiredCustomerEmailTokenError>
 */
final class ExpiredCustomerEmailTokenErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;The given email token has expired.&quot;</code></p>
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


    public function build(): ExpiredCustomerEmailTokenError
    {
        return new ExpiredCustomerEmailTokenErrorModel(
            $this->message
        );
    }

    public static function of(): ExpiredCustomerEmailTokenErrorBuilder
    {
        return new self();
    }
}
