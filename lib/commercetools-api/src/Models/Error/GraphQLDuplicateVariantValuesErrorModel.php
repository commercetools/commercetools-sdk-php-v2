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
final class GraphQLDuplicateVariantValuesErrorModel extends JsonObjectModel implements GraphQLDuplicateVariantValuesError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateVariantValues';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?VariantValues
     */
    protected $variantValues;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?VariantValues $variantValues = null,
        ?string $code = null
    ) {
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
     * <p>Every Product Variant must have a distinct combination of SKU, prices, and custom Attribute values.</p>
     *
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
