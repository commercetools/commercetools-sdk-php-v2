<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLAttributeDefinitionAlreadyExistsError extends GraphQLErrorObject
{
    public const FIELD_CONFLICTING_PRODUCT_TYPE_ID = 'conflictingProductTypeId';
    public const FIELD_CONFLICTING_PRODUCT_TYPE_NAME = 'conflictingProductTypeName';
    public const FIELD_CONFLICTING_ATTRIBUTE_NAME = 'conflictingAttributeName';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Unique identifier of the Product Type containing the conflicting name.</p>
     *

     * @return null|string
     */
    public function getConflictingProductTypeId();

    /**
     * <p>Name of the Product Type containing the conflicting name.</p>
     *

     * @return null|string
     */
    public function getConflictingProductTypeName();

    /**
     * <p>Name of the conflicting Attribute.</p>
     *

     * @return null|string
     */
    public function getConflictingAttributeName();

    /**
     * @param ?string $conflictingProductTypeId
     */
    public function setConflictingProductTypeId(?string $conflictingProductTypeId): void;

    /**
     * @param ?string $conflictingProductTypeName
     */
    public function setConflictingProductTypeName(?string $conflictingProductTypeName): void;

    /**
     * @param ?string $conflictingAttributeName
     */
    public function setConflictingAttributeName(?string $conflictingAttributeName): void;
}
