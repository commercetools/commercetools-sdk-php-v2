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
 * @implements Builder<GraphQLLockedFieldError>
 */
final class GraphQLLockedFieldErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**
     * <p>Field that is currently locked.</p>
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


    public function build(): GraphQLLockedFieldError
    {
        return new GraphQLLockedFieldErrorModel(
            $this->field
        );
    }

    public static function of(): GraphQLLockedFieldErrorBuilder
    {
        return new self();
    }
}
