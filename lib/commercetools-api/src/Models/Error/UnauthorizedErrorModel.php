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
final class UnauthorizedErrorModel extends JsonObjectModel implements UnauthorizedError
{
    public const DISCRIMINATOR_VALUE = 'Unauthorized';
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
     * @var ?array
     */
    protected $storesWithoutPermission;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?array $storesWithoutPermission = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->storesWithoutPermission = $storesWithoutPermission;
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
     * <p><code>&quot;Customer reference expansion not permitted on my business unit&quot;</code> or <code>&quot;Not allowed to edit this CartDiscount.&quot;</code></p>
     *
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
     * <p>Keys of <a href="ctp:api:type:Store">Stores</a> for which the required permission to modify is missing.</p>
     * <p>This field is returned only for <a href="ctp:api:type:CartDiscount">Cart Discounts</a>.</p>
     *
     *
     * @return null|array
     */
    public function getStoresWithoutPermission()
    {
        if (is_null($this->storesWithoutPermission)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_STORES_WITHOUT_PERMISSION);
            if (is_null($data)) {
                return null;
            }
            $this->storesWithoutPermission = $data;
        }

        return $this->storesWithoutPermission;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?array $storesWithoutPermission
     */
    public function setStoresWithoutPermission(?array $storesWithoutPermission): void
    {
        $this->storesWithoutPermission = $storesWithoutPermission;
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
