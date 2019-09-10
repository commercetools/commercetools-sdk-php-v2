<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PriceChangedError>
 */
final class PriceChangedErrorBuilder implements Builder
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
     * @var ?bool
     */
    private $shipping;

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
     * @return null|bool
     */
    public function getShipping()
    {
        return $this->shipping;
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
    public function withShipping(?bool $shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    public function build(): PriceChangedError
    {
        return new PriceChangedErrorModel(
            $this->code,
            $this->message,
            $this->lineItems,
            $this->shipping
        );
    }

    public static function of(): PriceChangedErrorBuilder
    {
        return new self();
    }
}
