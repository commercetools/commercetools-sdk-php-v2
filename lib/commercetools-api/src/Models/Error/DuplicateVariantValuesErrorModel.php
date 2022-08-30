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
final class DuplicateVariantValuesErrorModel extends JsonObjectModel implements DuplicateVariantValuesError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateVariantValues';
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
     * @var ?VariantValues
     */
    protected $variantValues;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?VariantValues $variantValues = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->variantValues = $variantValues;
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
     * @return null|VariantValues
     */
    public function getVariantValues()
    {
        if (is_null($this->variantValues)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT_VALUES);
            if (is_null($data)) {
                return null;
            }

            $this->variantValues = VariantValuesModel::of($data);
        }

        return $this->variantValues;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?VariantValues $variantValues
     */
    public function setVariantValues(?VariantValues $variantValues): void
    {
        $this->variantValues = $variantValues;
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
