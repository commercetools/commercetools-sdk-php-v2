<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLDuplicateFieldWithConflictingResourceError>
 */
final class GraphQLDuplicateFieldWithConflictingResourceErrorBuilder implements Builder
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

     * @var null|Reference|ReferenceBuilder
     */
    private $conflictingResource;

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
     * <p>Reference to the resource that has the conflicting value.</p>
     *

     * @return null|Reference
     */
    public function getConflictingResource()
    {
        return $this->conflictingResource instanceof ReferenceBuilder ? $this->conflictingResource->build() : $this->conflictingResource;
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

    /**
     * @param ?Reference $conflictingResource
     * @return $this
     */
    public function withConflictingResource(?Reference $conflictingResource)
    {
        $this->conflictingResource = $conflictingResource;

        return $this;
    }

    /**
     * @deprecated use withConflictingResource() instead
     * @return $this
     */
    public function withConflictingResourceBuilder(?ReferenceBuilder $conflictingResource)
    {
        $this->conflictingResource = $conflictingResource;

        return $this;
    }

    public function build(): GraphQLDuplicateFieldWithConflictingResourceError
    {
        return new GraphQLDuplicateFieldWithConflictingResourceErrorModel(
            $this->field,
            $this->duplicateValue,
            $this->conflictingResource instanceof ReferenceBuilder ? $this->conflictingResource->build() : $this->conflictingResource
        );
    }

    public static function of(): GraphQLDuplicateFieldWithConflictingResourceErrorBuilder
    {
        return new self();
    }
}
