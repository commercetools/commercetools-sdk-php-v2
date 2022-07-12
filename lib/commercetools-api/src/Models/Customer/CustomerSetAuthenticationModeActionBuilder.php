<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSetAuthenticationModeAction>
 */
final class CustomerSetAuthenticationModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $authMode;

    /**

     * @var ?string
     */
    private $password;

    /**

     * @return null|string
     */
    public function getAuthMode()
    {
        return $this->authMode;
    }

    /**
     * <p>Required when <code>authMode</code> is <code>Password</code></p>
     *

     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param ?string $authMode
     * @return $this
     */
    public function withAuthMode(?string $authMode)
    {
        $this->authMode = $authMode;

        return $this;
    }

    /**
     * @param ?string $password
     * @return $this
     */
    public function withPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }


    public function build(): CustomerSetAuthenticationModeAction
    {
        return new CustomerSetAuthenticationModeActionModel(
            $this->authMode,
            $this->password
        );
    }

    public static function of(): CustomerSetAuthenticationModeActionBuilder
    {
        return new self();
    }
}
