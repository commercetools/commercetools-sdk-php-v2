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
 * @implements Builder<SemanticErrorError>
 */
final class SemanticErrorErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p>Plain text description of the error concerning the predicate. For example, <code>&quot;Invalid country code $countryCode provided for the field $fieldDefinition.&quot;</code>.</p>
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


    public function build(): SemanticErrorError
    {
        return new SemanticErrorErrorModel(
            $this->message
        );
    }

    public static function of(): SemanticErrorErrorBuilder
    {
        return new self();
    }
}
