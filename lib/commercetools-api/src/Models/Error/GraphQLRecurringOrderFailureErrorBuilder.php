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
 * @implements Builder<GraphQLRecurringOrderFailureError>
 */
final class GraphQLRecurringOrderFailureErrorBuilder implements Builder
{
    /**

     * @var null|mixed|mixed
     */
    private $details;

    /**
     * <p>Details about the error's cause and the entities involved.</p>
     *

     * @return null|mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     * @return $this
     */
    public function withDetails($details)
    {
        $this->details = $details;

        return $this;
    }


    public function build(): GraphQLRecurringOrderFailureError
    {
        return new GraphQLRecurringOrderFailureErrorModel(
            $this->details
        );
    }

    public static function of(): GraphQLRecurringOrderFailureErrorBuilder
    {
        return new self();
    }
}
