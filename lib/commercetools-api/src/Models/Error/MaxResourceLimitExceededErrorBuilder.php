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
 * @implements Builder<MaxResourceLimitExceededError>
 */
final class MaxResourceLimitExceededErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $exceededResource;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>supported resource type identifiers:</p>
     *
     * @return null|string
     */
    public function getExceededResource()
    {
        return $this->exceededResource;
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
     * @param ?string $exceededResource
     * @return $this
     */
    public function withExceededResource(?string $exceededResource)
    {
        $this->exceededResource = $exceededResource;

        return $this;
    }


    public function build(): MaxResourceLimitExceededError
    {
        return new MaxResourceLimitExceededErrorModel(
            $this->message,
            $this->exceededResource
        );
    }

    public static function of(): MaxResourceLimitExceededErrorBuilder
    {
        return new self();
    }
}
