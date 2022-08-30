<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentSetStatusInterfaceTextActionModel extends JsonObjectModel implements PaymentSetStatusInterfaceTextAction
{
    public const DISCRIMINATOR_VALUE = 'setStatusInterfaceText';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $interfaceText;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $interfaceText = null,
        ?string $action = null
    ) {
        $this->interfaceText = $interfaceText;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     *
     * @return null|string
     */
    public function getInterfaceText()
    {
        if (is_null($this->interfaceText)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceText = (string) $data;
        }

        return $this->interfaceText;
    }


    /**
     * @param ?string $interfaceText
     */
    public function setInterfaceText(?string $interfaceText): void
    {
        $this->interfaceText = $interfaceText;
    }
}
