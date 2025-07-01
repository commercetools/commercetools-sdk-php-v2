<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodTokenModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentSetMethodInfoTokenActionModel extends JsonObjectModel implements PaymentSetMethodInfoTokenAction
{
    public const DISCRIMINATOR_VALUE = 'setMethodInfoToken';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?PaymentMethodToken
     */
    protected $token;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PaymentMethodToken $token = null,
        ?string $action = null
    ) {
        $this->token = $token;
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
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *
     *
     * @return null|PaymentMethodToken
     */
    public function getToken()
    {
        if (is_null($this->token)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOKEN);
            if (is_null($data)) {
                return null;
            }

            $this->token = PaymentMethodTokenModel::of($data);
        }

        return $this->token;
    }


    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void
    {
        $this->token = $token;
    }
}
