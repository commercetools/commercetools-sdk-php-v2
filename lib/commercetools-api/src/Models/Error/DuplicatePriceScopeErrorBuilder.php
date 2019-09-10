<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<DuplicatePriceScopeError>
 */
final class DuplicatePriceScopeErrorBuilder implements Builder
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
     * @var ?PriceCollection
     */
    private $conflictingPrices;

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
     * @return null|PriceCollection
     */
    public function getConflictingPrices()
    {
        return $this->conflictingPrices;
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
    public function withConflictingPrices(?PriceCollection $conflictingPrices)
    {
        $this->conflictingPrices = $conflictingPrices;

        return $this;
    }

    public function build(): DuplicatePriceScopeError
    {
        return new DuplicatePriceScopeErrorModel(
            $this->code,
            $this->message,
            $this->conflictingPrices
        );
    }

    public static function of(): DuplicatePriceScopeErrorBuilder
    {
        return new self();
    }
}
