<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerSignin extends JsonObject {
    protected $email;
    protected $password;
    protected $anonymousCartId;
    protected $anonymousCartSignInMode;
    protected $anonymousId;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        if (is_null($this->email)) {
            $value = $this->raw('email');
            if (!is_null($value)) {
                $this->email = (string)$value;
            } else {
                return '';
            }
        }
        return $this->email;
    }
                

    /**
     * @return string
     */
    public function getPassword(): string
    {
        if (is_null($this->password)) {
            $value = $this->raw('password');
            if (!is_null($value)) {
                $this->password = (string)$value;
            } else {
                return '';
            }
        }
        return $this->password;
    }
                

    /**
     * @return string
     */
    public function getAnonymousCartId(): string
    {
        if (is_null($this->anonymousCartId)) {
            $value = $this->raw('anonymousCartId');
            if (!is_null($value)) {
                $this->anonymousCartId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->anonymousCartId;
    }
                

    /**
     * @return AnonymousCartSignInMode
     */
    public function getAnonymousCartSignInMode(): AnonymousCartSignInMode
    {
        if (is_null($this->anonymousCartSignInMode)) {
            $value = $this->raw('anonymousCartSignInMode');
            if (!is_null($value)) {
                $this->anonymousCartSignInMode = Mapper::map($value, AnonymousCartSignInMode::class);
            } else {
                return Mapper::map([], AnonymousCartSignInMode::class);
            }
        }
        return $this->anonymousCartSignInMode;
    }
                

    /**
     * @return string
     */
    public function getAnonymousId(): string
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw('anonymousId');
            if (!is_null($value)) {
                $this->anonymousId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->anonymousId;
    }
                
}
