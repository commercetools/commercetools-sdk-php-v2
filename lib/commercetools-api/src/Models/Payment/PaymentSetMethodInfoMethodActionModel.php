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
final class PaymentSetMethodInfoMethodActionModel extends JsonObjectModel implements PaymentSetMethodInfoMethodAction
{
    public const DISCRIMINATOR_VALUE = 'setMethodInfoMethod';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $method;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $method = null,
        ?string $action = null
    ) {
        $this->method = $method;
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
     * <p>If not provided, the method is unset.</p>
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
     * @param ?string $method
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
}
