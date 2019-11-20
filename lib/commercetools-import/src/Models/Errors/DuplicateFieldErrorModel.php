<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DuplicateFieldErrorModel extends JsonObjectModel implements DuplicateFieldError
{
    const DISCRIMINATOR_VALUE = 'DuplicateField';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?JsonObject
     */
    protected $duplicateValue;

    /**
     * @var ?string
     */
    protected $field;

    public function __construct(
        string $message = null,
        JsonObject $duplicateValue = null,
        string $field = null
    ) {
        $this->message = $message;
        $this->duplicateValue = $duplicateValue;
        $this->field = $field;
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
     * <p>The error's description.</p>.
     *
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
     * <p>The offending duplicate value.</p>.
     *
     * @return null|JsonObject
     */
    public function getDuplicateValue()
    {
        if (is_null($this->duplicateValue)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(DuplicateFieldError::FIELD_DUPLICATE_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->duplicateValue = JsonObjectModel::of($data);
        }

        return $this->duplicateValue;
    }

    /**
     * <p>The name of the field.</p>.
     *
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DuplicateFieldError::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setDuplicateValue(?JsonObject $duplicateValue): void
    {
        $this->duplicateValue = $duplicateValue;
    }

    public function setField(?string $field): void
    {
        $this->field = $field;
    }
}
