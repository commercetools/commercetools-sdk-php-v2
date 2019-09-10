<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentStatusDraftModel extends JsonObjectModel implements PaymentStatusDraft
{
    /**
     * @var ?string
     */
    protected $interfaceText;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $interfaceCode;

    public function __construct(
        string $interfaceText = null,
        StateResourceIdentifier $state = null,
        string $interfaceCode = null
    ) {
        $this->interfaceText = $interfaceText;
        $this->state = $state;
        $this->interfaceCode = $interfaceCode;
    }

    /**
     * @return null|string
     */
    public function getInterfaceText()
    {
        if (is_null($this->interfaceText)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentStatusDraft::FIELD_INTERFACE_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceText = (string) $data;
        }

        return $this->interfaceText;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentStatusDraft::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentStatusDraft::FIELD_INTERFACE_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceCode = (string) $data;
        }

        return $this->interfaceCode;
    }

    public function setInterfaceText(?string $interfaceText): void
    {
        $this->interfaceText = $interfaceText;
    }

    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    public function setInterfaceCode(?string $interfaceCode): void
    {
        $this->interfaceCode = $interfaceCode;
    }
}
