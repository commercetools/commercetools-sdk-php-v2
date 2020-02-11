<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PriceChangedError>
 */
final class PriceChangedErrorBuilder implements Builder
{
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
