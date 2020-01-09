<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DuplicateFieldWithConflictingResourceErrorModel extends JsonObjectModel implements DuplicateFieldWithConflictingResourceError
{
    const DISCRIMINATOR_VALUE = 'DuplicateFieldWithConflictingResource';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $field;

    /**
     * @var ?JsonObject
     */
    protected $duplicateValue;

    /**
     * @var ?Reference
     */
    protected $conflictingResource;

    public function __construct(
        string $message = null,
        string $field = null,
        JsonObject $duplicateValue = null,
        Reference $conflictingResource = null
    ) {
        $this->message = $message;
        $this->field = $field;
        $this->duplicateValue = $duplicateValue;
        $this->conflictingResource = $conflictingResource;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DuplicateFieldWithConflictingResourceError::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     * @return null|JsonObject
     */
    public function getDuplicateValue()
    {
        if (is_null($this->duplicateValue)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(DuplicateFieldWithConflictingResourceError::FIELD_DUPLICATE_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->duplicateValue = JsonObjectModel::of($data);
        }

        return $this->duplicateValue;
    }

    /**
     * @return null|Reference
     */
    public function getConflictingResource()
    {
        if (is_null($this->conflictingResource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DuplicateFieldWithConflictingResourceError::FIELD_CONFLICTING_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->conflictingResource = $className::of($data);
        }

        return $this->conflictingResource;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    public function setDuplicateValue(?JsonObject $duplicateValue): void
    {
        $this->duplicateValue = $duplicateValue;
    }

    public function setConflictingResource(?Reference $conflictingResource): void
    {
        $this->conflictingResource = $conflictingResource;
    }
}
