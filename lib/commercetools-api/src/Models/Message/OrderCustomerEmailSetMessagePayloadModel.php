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
final class OrderCustomerEmailSetMessagePayloadModel extends JsonObjectModel implements OrderCustomerEmailSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCustomerEmailSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $email;

    /**
     *
     * @var ?string
     */
    protected $oldEmail;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $email = null,
        ?string $oldEmail = null,
        ?string $type = null
    ) {
        $this->email = $email;
        $this->oldEmail = $oldEmail;
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
     * <p>Email address on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetCustomerEmailAction">Set Customer Email</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * <p>Email address on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetCustomerEmailAction">Set Customer Email</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldEmail()
    {
        if (is_null($this->oldEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->oldEmail = (string) $data;
        }

        return $this->oldEmail;
    }


    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param ?string $oldEmail
     */
    public function setOldEmail(?string $oldEmail): void
    {
        $this->oldEmail = $oldEmail;
    }
}
