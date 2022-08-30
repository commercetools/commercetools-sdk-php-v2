<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InvalidItemShippingDetailsErrorModel extends JsonObjectModel implements InvalidItemShippingDetailsError
{
    public const DISCRIMINATOR_VALUE = 'InvalidItemShippingDetails';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?string
     */
    protected $subject;

    /**
     *
     * @var ?string
     */
    protected $itemId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $subject = null,
        ?string $itemId = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->subject = $subject;
        $this->itemId = $itemId;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     *
     * @return null|string
     */
    public function getSubject()
    {
        if (is_null($this->subject)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SUBJECT);
            if (is_null($data)) {
                return null;
            }
            $this->subject = (string) $data;
        }

        return $this->subject;
    }

    /**
     *
     * @return null|string
     */
    public function getItemId()
    {
        if (is_null($this->itemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->itemId = (string) $data;
        }

        return $this->itemId;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $subject
     */
    public function setSubject(?string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @param ?string $itemId
     */
    public function setItemId(?string $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
