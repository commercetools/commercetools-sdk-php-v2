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
 * @implements Builder<GraphQLRequiredFieldError>
 */
final class GraphQLRequiredFieldErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**
     * <p>Name of the field missing the value.</p>
     *

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }


    public function build(): GraphQLRequiredFieldError
    {
        return new GraphQLRequiredFieldErrorModel(
            $this->field
        );
    }

    public static function of(): GraphQLRequiredFieldErrorBuilder
    {
        return new self();
    }
}
