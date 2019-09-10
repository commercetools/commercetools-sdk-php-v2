<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OutOfStockError>
 */
final class OutOfStockErrorBuilder implements Builder
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
     * @var ?array
     */
    private $lineItems;

    /**
     * @var ?array
     */
    private $skus;

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
     * @return null|array
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @return null|array
     */
    public function getSkus()
    {
        return $this->skus;
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
    public function withLineItems(?array $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSkus(?array $skus)
    {
        $this->skus = $skus;

        return $this;
    }

    public function build(): OutOfStockError
    {
        return new OutOfStockErrorModel(
            $this->code,
            $this->message,
            $this->lineItems,
            $this->skus
        );
    }

    public static function of(): OutOfStockErrorBuilder
    {
        return new self();
    }
}
