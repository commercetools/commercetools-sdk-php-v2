<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

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
final class PaymentMethodInfoTokenSetMessagePayloadModel extends JsonObjectModel implements PaymentMethodInfoTokenSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodInfoTokenSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?PaymentMethodToken
     */
    protected $token;

    /**
     *
     * @var ?PaymentMethodToken
     */
    protected $oldToken;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PaymentMethodToken $token = null,
        ?PaymentMethodToken $oldToken = null,
        ?string $type = null
    ) {
        $this->token = $token;
        $this->oldToken = $oldToken;
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
     * <p>Token of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoTokenAction">Set MethodInfo Token</a> update action.</p>
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
     * <p>Token of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoTokenAction">Set MethodInfo Token</a> update action.</p>
     *
     *
     * @return null|PaymentMethodToken
     */
    public function getOldToken()
    {
        if (is_null($this->oldToken)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_TOKEN);
            if (is_null($data)) {
                return null;
            }

            $this->oldToken = PaymentMethodTokenModel::of($data);
        }

        return $this->oldToken;
    }


    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void
    {
        $this->token = $token;
    }

    /**
     * @param ?PaymentMethodToken $oldToken
     */
    public function setOldToken(?PaymentMethodToken $oldToken): void
    {
        $this->oldToken = $oldToken;
    }
}
