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
final class PaymentMethodInfoMethodSetMessagePayloadModel extends JsonObjectModel implements PaymentMethodInfoMethodSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodInfoMethodSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $method;

    /**
     *
     * @var ?string
     */
    protected $oldMethod;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $method = null,
        ?string $oldMethod = null,
        ?string $type = null
    ) {
        $this->method = $method;
        $this->oldMethod = $oldMethod;
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
     * <p>Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoMethodAction">Set MethodInfo Method</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getMethod()
    {
        if (is_null($this->method)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_METHOD);
            if (is_null($data)) {
                return null;
            }
            $this->method = (string) $data;
        }

        return $this->method;
    }

    /**
     * <p>Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoMethodAction">Set MethodInfo Method</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldMethod()
    {
        if (is_null($this->oldMethod)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_METHOD);
            if (is_null($data)) {
                return null;
            }
            $this->oldMethod = (string) $data;
        }

        return $this->oldMethod;
    }


    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * @param ?string $oldMethod
     */
    public function setOldMethod(?string $oldMethod): void
    {
        $this->oldMethod = $oldMethod;
    }
}
