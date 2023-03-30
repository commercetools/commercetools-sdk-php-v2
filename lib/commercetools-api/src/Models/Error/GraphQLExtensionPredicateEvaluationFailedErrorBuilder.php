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
 * @implements Builder<GraphQLExtensionPredicateEvaluationFailedError>
 */
final class GraphQLExtensionPredicateEvaluationFailedErrorBuilder implements Builder
{
    /**

     * @var null|ErrorByExtension|ErrorByExtensionBuilder
     */
    private $errorByExtension;

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

    public function build(): GraphQLExtensionPredicateEvaluationFailedError
    {
        return new GraphQLExtensionPredicateEvaluationFailedErrorModel(
            $this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension
        );
    }

    public static function of(): GraphQLExtensionPredicateEvaluationFailedErrorBuilder
    {
        return new self();
    }
}
