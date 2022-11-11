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
final class DuplicateFieldErrorModel extends JsonObjectModel implements DuplicateFieldError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateField';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $field = null,
        $duplicateValue = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->field = $field;
        $this->duplicateValue = $duplicateValue;
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
     * <p><code>&quot;A duplicate value $duplicateValue exists for field $field.&quot;</code></p>
     *
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
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
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
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
