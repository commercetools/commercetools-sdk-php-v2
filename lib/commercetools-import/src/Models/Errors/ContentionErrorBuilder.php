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
 * @implements Builder<ContentionError>
 */
final class ContentionErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p>A plain language description of the cause of an error.</p>
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


    public function build(): ContentionError
    {
        return new ContentionErrorModel(
            $this->message
        );
    }

    public static function of(): ContentionErrorBuilder
    {
        return new self();
    }
}
