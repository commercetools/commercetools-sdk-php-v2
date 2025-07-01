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
 * @implements Builder<PaymentInterfaceIdSetMessagePayload>
 */
final class PaymentInterfaceIdSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $interfaceId;

    /**

     * @var ?string
     */
    private $oldInterfaceId;

    /**
     * <p>Interface ID of the Payment after the <a href="ctp:api:type:PaymentSetInterfaceIdAction">Set InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterfaceId()
    {
        return $this->interfaceId;
    }

    /**
     * <p>Interface ID of the Payment before the <a href="ctp:api:type:PaymentSetInterfaceIdAction">Set InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterfaceId()
    {
        return $this->oldInterfaceId;
    }

    /**
     * @param ?string $interfaceId
     * @return $this
     */
    public function withInterfaceId(?string $interfaceId)
    {
        $this->interfaceId = $interfaceId;

        return $this;
    }

    /**
     * @param ?string $oldInterfaceId
     * @return $this
     */
    public function withOldInterfaceId(?string $oldInterfaceId)
    {
        $this->oldInterfaceId = $oldInterfaceId;

        return $this;
    }


    public function build(): PaymentInterfaceIdSetMessagePayload
    {
        return new PaymentInterfaceIdSetMessagePayloadModel(
            $this->interfaceId,
            $this->oldInterfaceId
        );
    }

    public static function of(): PaymentInterfaceIdSetMessagePayloadBuilder
    {
        return new self();
    }
}
