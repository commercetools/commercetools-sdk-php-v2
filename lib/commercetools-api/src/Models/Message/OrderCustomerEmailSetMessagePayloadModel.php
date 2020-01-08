<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;

final class OrderCustomerEmailSetMessagePayloadModel extends JsonObjectModel implements OrderCustomerEmailSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderCustomerEmailSet';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $email;

    /**
     * @var ?string
     */
    protected $oldEmail;

    public function __construct(
        string $email = null,
        string $oldEmail = null
    ) {
        $this->email = $email;
        $this->oldEmail = $oldEmail;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderCustomerEmailSetMessagePayload::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getOldEmail()
    {
        if (is_null($this->oldEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderCustomerEmailSetMessagePayload::FIELD_OLD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->oldEmail = (string) $data;
        }

        return $this->oldEmail;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function setOldEmail(?string $oldEmail): void
    {
        $this->oldEmail = $oldEmail;
    }
}
