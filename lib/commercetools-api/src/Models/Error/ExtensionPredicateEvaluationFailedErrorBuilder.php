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
 * @implements Builder<ExtensionPredicateEvaluationFailedError>
 */
final class ExtensionPredicateEvaluationFailedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var null|ErrorByExtension|ErrorByExtensionBuilder
     */
    private $errorByExtension;

    /**
     * <p><code>&quot;The compared field $fieldName is not present.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Details about the API Extension that was involved in the error.</p>
     *

     * @return null|ErrorByExtension
     */
    public function getErrorByExtension()
    {
        return $this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension;
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
     * @param ?ErrorByExtension $errorByExtension
     * @return $this
     */
    public function withErrorByExtension(?ErrorByExtension $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;

        return $this;
    }

    /**
     * @deprecated use withErrorByExtension() instead
     * @return $this
     */
    public function withErrorByExtensionBuilder(?ErrorByExtensionBuilder $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;

        return $this;
    }

    public function build(): ExtensionPredicateEvaluationFailedError
    {
        return new ExtensionPredicateEvaluationFailedErrorModel(
            $this->message,
            $this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension
        );
    }

    public static function of(): ExtensionPredicateEvaluationFailedErrorBuilder
    {
        return new self();
    }
}
