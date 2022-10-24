<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetAuthenticationModeAction extends CustomerUpdateAction
{
    public const FIELD_AUTH_MODE = 'authMode';
    public const FIELD_PASSWORD = 'password';

    /**
     * <p>Value to set.
     * Changing a Customer's <code>authMode</code> from <code>Password</code> to <code>ExternalAuth</code> deletes the Customer's password.</p>
     *

     * @return null|string
     */
    public function getAuthMode();

    /**
     * <p>Required when <code>authMode</code> is <code>Password</code>.</p>
     *

     * @return null|string
     */
    public function getPassword();

    /**
     * @param ?string $authMode
     */
    public function setAuthMode(?string $authMode): void;

    /**
     * @param ?string $password
     */
    public function setPassword(?string $password): void;
}
