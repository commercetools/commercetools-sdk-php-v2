<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodInfoInterfaceAccountSetMessagePayloadModel extends JsonObjectModel implements PaymentMethodInfoInterfaceAccountSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodInfoInterfaceAccountSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $interfaceAccount;

    /**
     *
     * @var ?string
     */
    protected $oldInterfaceAccount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $interfaceAccount = null,
        ?string $oldInterfaceAccount = null,
        ?string $type = null
    ) {
        $this->interfaceAccount = $interfaceAccount;
        $this->oldInterfaceAccount = $oldInterfaceAccount;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Interface account of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAccountAction">Set MethodInfo InterfaceAccount</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getInterfaceAccount()
    {
        if (is_null($this->interfaceAccount)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE_ACCOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceAccount = (string) $data;
        }

        return $this->interfaceAccount;
    }

    /**
     * <p>Interface account of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAccountAction">Set MethodInfo InterfaceAccount</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldInterfaceAccount()
    {
        if (is_null($this->oldInterfaceAccount)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_INTERFACE_ACCOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->oldInterfaceAccount = (string) $data;
        }

        return $this->oldInterfaceAccount;
    }


    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void
    {
        $this->interfaceAccount = $interfaceAccount;
    }

    /**
     * @param ?string $oldInterfaceAccount
     */
    public function setOldInterfaceAccount(?string $oldInterfaceAccount): void
    {
        $this->oldInterfaceAccount = $oldInterfaceAccount;
    }
}
