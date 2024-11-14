<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLResponse>
 */
final class GraphQLResponseBuilder implements Builder
{
    /**

     * @var null|mixed|mixed
     */
    private $data;

    /**

     * @var ?GraphQLErrorCollection
     */
    private $errors;

    /**
     * <p>JSON object that contains the results of a GraphQL query.</p>
     *

     * @return null|mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * <p>Errors that the GraphQL query returns.</p>
     *

     * @return null|GraphQLErrorCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param mixed $data
     * @return $this
     */
    public function withData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @param ?GraphQLErrorCollection $errors
     * @return $this
     */
    public function withErrors(?GraphQLErrorCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }


    public function build(): GraphQLResponse
    {
        return new GraphQLResponseModel(
            $this->data,
            $this->errors
        );
    }

    public static function of(): GraphQLResponseBuilder
    {
        return new self();
    }
}
