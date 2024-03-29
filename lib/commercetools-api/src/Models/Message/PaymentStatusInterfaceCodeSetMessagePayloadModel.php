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
final class PaymentStatusInterfaceCodeSetMessagePayloadModel extends JsonObjectModel implements PaymentStatusInterfaceCodeSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentStatusInterfaceCodeSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $interfaceCode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $interfaceCode = null,
        ?string $type = null
    ) {
        $this->interfaceCode = $interfaceCode;
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
     * <p>The <code>interfaceCode</code> that was set during the <a href="ctp:api:type:PaymentSetStatusInterfaceCodeAction">Set StatusInterfaceCode</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceCode = (string) $data;
        }

        return $this->interfaceCode;
    }


    /**
     * @param ?string $interfaceCode
     */
    public function setInterfaceCode(?string $interfaceCode): void
    {
        $this->interfaceCode = $interfaceCode;
    }
}
