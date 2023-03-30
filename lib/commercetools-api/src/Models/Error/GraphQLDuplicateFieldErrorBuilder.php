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
 * @implements Builder<GraphQLDuplicateFieldError>
 */
final class GraphQLDuplicateFieldErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**

     * @var null|mixed|mixed
     */
    private $duplicateValue;

    /**
     * <p>Name of the conflicting field.</p>
     *

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <p>Conflicting duplicate value.</p>
     *

     * @return null|mixed
     */
    public function getDuplicateValue()
    {
        return $this->duplicateValue;
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

    /**
     * @param mixed $duplicateValue
     * @return $this
     */
    public function withDuplicateValue($duplicateValue)
    {
        $this->duplicateValue = $duplicateValue;

        return $this;
    }


    public function build(): GraphQLDuplicateFieldError
    {
        return new GraphQLDuplicateFieldErrorModel(
            $this->field,
            $this->duplicateValue
        );
    }

    public static function of(): GraphQLDuplicateFieldErrorBuilder
    {
        return new self();
    }
}
