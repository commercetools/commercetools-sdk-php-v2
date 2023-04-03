<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailure;
use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailureBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLEditPreviewFailedError>
 */
final class GraphQLEditPreviewFailedErrorBuilder implements Builder
{
    /**

     * @var null|OrderEditPreviewFailure|OrderEditPreviewFailureBuilder
     */
    private $result;

    /**
     * <p>State of the OrderEdit where the <code>stagedActions</code> cannot be applied to the Order.</p>
     *

     * @return null|OrderEditPreviewFailure
     */
    public function getResult()
    {
        return $this->result instanceof OrderEditPreviewFailureBuilder ? $this->result->build() : $this->result;
    }

    /**
     * @param ?OrderEditPreviewFailure $result
     * @return $this
     */
    public function withResult(?OrderEditPreviewFailure $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @deprecated use withResult() instead
     * @return $this
     */
    public function withResultBuilder(?OrderEditPreviewFailureBuilder $result)
    {
        $this->result = $result;

        return $this;
    }

    public function build(): GraphQLEditPreviewFailedError
    {
        return new GraphQLEditPreviewFailedErrorModel(
            $this->result instanceof OrderEditPreviewFailureBuilder ? $this->result->build() : $this->result
        );
    }

    public static function of(): GraphQLEditPreviewFailedErrorBuilder
    {
        return new self();
    }
}
