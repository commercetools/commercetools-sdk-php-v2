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

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;

final class PaymentStatusModel extends JsonObjectModel implements PaymentStatus
{

    /**
     * @var ?string
     */
    protected $interfaceCode;

    /**
     * @var ?string
     */
    protected $interfaceText;

    /**
     * @var ?StateReference
     */
    protected $state;


    public function __construct(
        string $interfaceCode = null,
        string $interfaceText = null,
        StateReference $state = null
    ) {
        $this->interfaceCode = $interfaceCode;
        $this->interfaceText = $interfaceText;
        $this->state = $state;

    }

    /**
     * <p>A code describing the current status returned by the interface that processes the payment.</p>
     *
     * @return null|string
     */
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentStatus::FIELD_INTERFACE_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceCode = (string) $data;
        }

        return $this->interfaceCode;
    }

    /**
     * <p>A text describing the current status returned by the interface that processes the payment.</p>
     *
     * @return null|string
     */
    public function getInterfaceText()
    {
        if (is_null($this->interfaceText)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentStatus::FIELD_INTERFACE_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceText = (string) $data;
        }

        return $this->interfaceText;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentStatus::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    public function setInterfaceCode(?string $interfaceCode): void
    {
        $this->interfaceCode = $interfaceCode;
    }

    public function setInterfaceText(?string $interfaceText): void
    {
        $this->interfaceText = $interfaceText;
    }

    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }



}
