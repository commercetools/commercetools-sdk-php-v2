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


final class CustomerSigninModel extends JsonObjectModel implements CustomerSignin
{

    /**
     * @var ?string
     */
    protected $email;

    /**
     * @var ?string
     */
    protected $password;

    /**
     * @var ?string
     */
    protected $anonymousCartId;

    /**
     * @var ?string
     */
    protected $anonymousCartSignInMode;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?bool
     */
    protected $updateProductData;


    public function __construct(
        string $email = null,
        string $password = null,
        string $anonymousCartId = null,
        string $anonymousCartSignInMode = null,
        string $anonymousId = null,
        bool $updateProductData = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->anonymousCartId = $anonymousCartId;
        $this->anonymousCartSignInMode = $anonymousCartSignInMode;
        $this->anonymousId = $anonymousId;
        $this->updateProductData = $updateProductData;

    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSignin::FIELD_EMAIL);
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
    public function getPassword()
    {
        if (is_null($this->password)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSignin::FIELD_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->password = (string) $data;
        }

        return $this->password;
    }

    /**
     * @return null|string
     */
    public function getAnonymousCartId()
    {
        if (is_null($this->anonymousCartId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSignin::FIELD_ANONYMOUS_CART_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousCartId = (string) $data;
        }

        return $this->anonymousCartId;
    }

    /**
     * @return null|string
     */
    public function getAnonymousCartSignInMode()
    {
        if (is_null($this->anonymousCartSignInMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSignin::FIELD_ANONYMOUS_CART_SIGN_IN_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousCartSignInMode = (string) $data;
        }

        return $this->anonymousCartSignInMode;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSignin::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        if (is_null($this->updateProductData)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(CustomerSignin::FIELD_UPDATE_PRODUCT_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->updateProductData = (bool) $data;
        }

        return $this->updateProductData;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function setAnonymousCartId(?string $anonymousCartId): void
    {
        $this->anonymousCartId = $anonymousCartId;
    }

    public function setAnonymousCartSignInMode(?string $anonymousCartSignInMode): void
    {
        $this->anonymousCartSignInMode = $anonymousCartSignInMode;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    public function setUpdateProductData(?bool $updateProductData): void
    {
        $this->updateProductData = $updateProductData;
    }



}
