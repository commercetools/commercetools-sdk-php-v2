<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLDuplicateFieldWithConflictingResourceErrorModel extends JsonObjectModel implements GraphQLDuplicateFieldWithConflictingResourceError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateFieldWithConflictingResource';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?mixed
     */
    protected $duplicateValue;

    /**
     *
     * @var ?Reference
     */
    protected $conflictingResource;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        $duplicateValue = null,
        ?Reference $conflictingResource = null,
        ?string $code = null
    ) {
        $this->field = $field;
        $this->duplicateValue = $duplicateValue;
        $this->conflictingResource = $conflictingResource;
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
     * <p>Name of the conflicting field.</p>
     *
     *
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     * <p>Conflicting duplicate value.</p>
     *
     *
     * @return null|mixed
     */
    public function getDuplicateValue()
    {
        if (is_null($this->duplicateValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_DUPLICATE_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->duplicateValue = $data;
        }

        return $this->duplicateValue;
    }

    /**
     * <p>Reference to the resource that has the conflicting value.</p>
     *
     *
     * @return null|Reference
     */
    public function getConflictingResource()
    {
        if (is_null($this->conflictingResource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CONFLICTING_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->conflictingResource = $className::of($data);
        }

        return $this->conflictingResource;
    }


    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param mixed $duplicateValue
     */
    public function setDuplicateValue($duplicateValue): void
    {
        $this->duplicateValue = $duplicateValue;
    }

    /**
     * @param ?Reference $conflictingResource
     */
    public function setConflictingResource(?Reference $conflictingResource): void
    {
        $this->conflictingResource = $conflictingResource;
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
