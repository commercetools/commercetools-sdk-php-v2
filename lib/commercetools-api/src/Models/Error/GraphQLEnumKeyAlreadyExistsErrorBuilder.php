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
 * @implements Builder<GraphQLEnumKeyAlreadyExistsError>
 */
final class GraphQLEnumKeyAlreadyExistsErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $conflictingEnumKey;

    /**

     * @var ?string
     */
    private $conflictingAttributeName;

    /**
     * <p>Conflicting enum key.</p>
     *

     * @return null|string
     */
    public function getConflictingEnumKey()
    {
        return $this->conflictingEnumKey;
    }

    /**
     * <p>Name of the conflicting Attribute.</p>
     *

     * @return null|string
     */
    public function getConflictingAttributeName()
    {
        return $this->conflictingAttributeName;
    }

    /**
     * @param ?string $conflictingEnumKey
     * @return $this
     */
    public function withConflictingEnumKey(?string $conflictingEnumKey)
    {
        $this->conflictingEnumKey = $conflictingEnumKey;

        return $this;
    }

    /**
     * @param ?string $conflictingAttributeName
     * @return $this
     */
    public function withConflictingAttributeName(?string $conflictingAttributeName)
    {
        $this->conflictingAttributeName = $conflictingAttributeName;

        return $this;
    }


    public function build(): GraphQLEnumKeyAlreadyExistsError
    {
        return new GraphQLEnumKeyAlreadyExistsErrorModel(
            $this->conflictingEnumKey,
            $this->conflictingAttributeName
        );
    }

    public static function of(): GraphQLEnumKeyAlreadyExistsErrorBuilder
    {
        return new self();
    }
}
