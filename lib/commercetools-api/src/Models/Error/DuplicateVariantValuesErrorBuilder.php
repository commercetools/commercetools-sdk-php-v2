<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<DuplicateVariantValuesError>
 */
final class DuplicateVariantValuesErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @var ?string
     */
    private $message;

    /**
     * @var VariantValues|?VariantValuesBuilder
     */
    private $variantValues;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|VariantValues
     */
    public function getVariantValues()
    {
        return $this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantValues(?VariantValues $variantValues)
    {
        $this->variantValues = $variantValues;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantValuesBuilder(?VariantValuesBuilder $variantValues)
    {
        $this->variantValues = $variantValues;

        return $this;
    }

    public function build(): DuplicateVariantValuesError
    {
        return new DuplicateVariantValuesErrorModel(
            $this->code,
            $this->message,
            ($this->variantValues instanceof VariantValuesBuilder ? $this->variantValues->build() : $this->variantValues)
        );
    }

    public static function of(): DuplicateVariantValuesErrorBuilder
    {
        return new self();
    }
}
