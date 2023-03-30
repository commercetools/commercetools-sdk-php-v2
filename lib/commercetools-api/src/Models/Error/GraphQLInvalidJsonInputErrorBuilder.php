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
 * @implements Builder<GraphQLInvalidJsonInputError>
 */
final class GraphQLInvalidJsonInputErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $detailedErrorMessage;

    /**
     * <p>Further explanation about why the JSON is invalid.</p>
     *

     * @return null|string
     */
    public function getDetailedErrorMessage()
    {
        return $this->detailedErrorMessage;
    }

    /**
     * @param ?string $detailedErrorMessage
     * @return $this
     */
    public function withDetailedErrorMessage(?string $detailedErrorMessage)
    {
        $this->detailedErrorMessage = $detailedErrorMessage;

        return $this;
    }


    public function build(): GraphQLInvalidJsonInputError
    {
        return new GraphQLInvalidJsonInputErrorModel(
            $this->detailedErrorMessage
        );
    }

    public static function of(): GraphQLInvalidJsonInputErrorBuilder
    {
        return new self();
    }
}
