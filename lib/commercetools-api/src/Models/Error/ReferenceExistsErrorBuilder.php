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
 * @implements Builder<ReferenceExistsError>
 */
final class ReferenceExistsErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $referencedBy;

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
    public function getReferencedBy()
    {
        return $this->referencedBy;
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
     * @param ?string $referencedBy
     * @return $this
     */
    public function withReferencedBy(?string $referencedBy)
    {
        $this->referencedBy = $referencedBy;

        return $this;
    }


    public function build(): ReferenceExistsError
    {
        return new ReferenceExistsErrorModel(
            $this->message,
            $this->referencedBy
        );
    }

    public static function of(): ReferenceExistsErrorBuilder
    {
        return new self();
    }
}
