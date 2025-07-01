<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodDefaultSetMessagePayload>
 */
final class PaymentMethodDefaultSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $default;

    /**

     * @var ?bool
     */
    private $oldDefault;

    /**
     * <p>Default Payment Method after the <a href="ctp:api:type:PaymentMethodSetDefaultAction">Set Default</a> update action.</p>
     *

     * @return null|bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * <p>Default Payment Method before the <a href="ctp:api:type:PaymentMethodSetDefaultAction">Set Default</a> update action.</p>
     *

     * @return null|bool
     */
    public function getOldDefault()
    {
        return $this->oldDefault;
    }

    /**
     * @param ?bool $default
     * @return $this
     */
    public function withDefault(?bool $default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @param ?bool $oldDefault
     * @return $this
     */
    public function withOldDefault(?bool $oldDefault)
    {
        $this->oldDefault = $oldDefault;

        return $this;
    }


    public function build(): PaymentMethodDefaultSetMessagePayload
    {
        return new PaymentMethodDefaultSetMessagePayloadModel(
            $this->default,
            $this->oldDefault
        );
    }

    public static function of(): PaymentMethodDefaultSetMessagePayloadBuilder
    {
        return new self();
    }
}
