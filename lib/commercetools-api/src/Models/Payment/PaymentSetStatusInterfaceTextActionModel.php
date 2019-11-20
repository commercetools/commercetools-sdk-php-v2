<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObjectModel;

final class PaymentSetStatusInterfaceTextActionModel extends JsonObjectModel implements PaymentSetStatusInterfaceTextAction
{
    const DISCRIMINATOR_VALUE = 'setStatusInterfaceText';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $interfaceText;

    public function __construct(
        string $interfaceText = null
    ) {
        $this->interfaceText = $interfaceText;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getInterfaceText()
    {
        if (is_null($this->interfaceText)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentSetStatusInterfaceTextAction::FIELD_INTERFACE_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceText = (string) $data;
        }

        return $this->interfaceText;
    }

    public function setInterfaceText(?string $interfaceText): void
    {
        $this->interfaceText = $interfaceText;
    }
}
