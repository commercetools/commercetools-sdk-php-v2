<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLAttributeDefinitionTypeConflictErrorModel extends JsonObjectModel implements GraphQLAttributeDefinitionTypeConflictError
{
    public const DISCRIMINATOR_VALUE = 'AttributeDefinitionTypeConflict';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $conflictingProductTypeId;

    /**
     *
     * @var ?string
     */
    protected $conflictingProductTypeName;

    /**
     *
     * @var ?string
     */
    protected $conflictingAttributeName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $conflictingProductTypeId = null,
        ?string $conflictingProductTypeName = null,
        ?string $conflictingAttributeName = null,
        ?string $code = null
    ) {
        $this->conflictingProductTypeId = $conflictingProductTypeId;
        $this->conflictingProductTypeName = $conflictingProductTypeName;
        $this->conflictingAttributeName = $conflictingAttributeName;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>Unique identifier of the Product Type containing the conflicting name.</p>
     *
     *
     * @return null|string
     */
    public function getConflictingProductTypeId()
    {
        if (is_null($this->conflictingProductTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_PRODUCT_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingProductTypeId = (string) $data;
        }

        return $this->conflictingProductTypeId;
    }

    /**
     * <p>Name of the Product Type containing the conflicting name.</p>
     *
     *
     * @return null|string
     */
    public function getConflictingProductTypeName()
    {
        if (is_null($this->conflictingProductTypeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_PRODUCT_TYPE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingProductTypeName = (string) $data;
        }

        return $this->conflictingProductTypeName;
    }

    /**
     * <p>Name of the conflicting Attribute.</p>
     *
     *
     * @return null|string
     */
    public function getConflictingAttributeName()
    {
        if (is_null($this->conflictingAttributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingAttributeName = (string) $data;
        }

        return $this->conflictingAttributeName;
    }


    /**
     * @param ?string $conflictingProductTypeId
     */
    public function setConflictingProductTypeId(?string $conflictingProductTypeId): void
    {
        $this->conflictingProductTypeId = $conflictingProductTypeId;
    }

    /**
     * @param ?string $conflictingProductTypeName
     */
    public function setConflictingProductTypeName(?string $conflictingProductTypeName): void
    {
        $this->conflictingProductTypeName = $conflictingProductTypeName;
    }

    /**
     * @param ?string $conflictingAttributeName
     */
    public function setConflictingAttributeName(?string $conflictingAttributeName): void
    {
        $this->conflictingAttributeName = $conflictingAttributeName;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
