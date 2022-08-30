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
final class AttributeNameDoesNotExistErrorModel extends JsonObjectModel implements AttributeNameDoesNotExistError
{
    public const DISCRIMINATOR_VALUE = 'AttributeNameDoesNotExist';
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
    protected $invalidAttributeName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $invalidAttributeName = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->invalidAttributeName = $invalidAttributeName;
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
     *
     * @return null|string
     */
    public function getInvalidAttributeName()
    {
        if (is_null($this->invalidAttributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INVALID_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->invalidAttributeName = (string) $data;
        }

        return $this->invalidAttributeName;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $invalidAttributeName
     */
    public function setInvalidAttributeName(?string $invalidAttributeName): void
    {
        $this->invalidAttributeName = $invalidAttributeName;
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
