<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSetAuthenticationModeActionModel extends JsonObjectModel implements CustomerSetAuthenticationModeAction
{
    public const DISCRIMINATOR_VALUE = 'setAuthenticationMode';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $authMode;

    /**
     *
     * @var ?string
     */
    protected $password;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $authMode = null,
        ?string $password = null,
        ?string $action = null
    ) {
        $this->authMode = $authMode;
        $this->password = $password;
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
     * Changing a Customer's <code>authMode</code> from <code>Password</code> to <code>ExternalAuth</code> deletes the Customer's password.</p>
     *
     *
     * @return null|string
     */
    public function getAuthMode()
    {
        if (is_null($this->authMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_AUTH_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->authMode = (string) $data;
        }

        return $this->authMode;
    }

    /**
     * <p>Required when <code>authMode</code> is <code>Password</code>.</p>
     *
     *
     * @return null|string
     */
    public function getPassword()
    {
        if (is_null($this->password)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->password = (string) $data;
        }

        return $this->password;
    }


    /**
     * @param ?string $authMode
     */
    public function setAuthMode(?string $authMode): void
    {
        $this->authMode = $authMode;
    }

    /**
     * @param ?string $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
}
