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
 * @implements Builder<ObjectNotFoundError>
 */
final class ObjectNotFoundErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;A $resourceType with identifier $id was unexpectedly not found.&quot;</code> or</p>
     * <p><code>&quot;No index found for project&quot;</code></p>
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


    public function build(): ObjectNotFoundError
    {
        return new ObjectNotFoundErrorModel(
            $this->message
        );
    }

    public static function of(): ObjectNotFoundErrorBuilder
    {
        return new self();
    }
}
