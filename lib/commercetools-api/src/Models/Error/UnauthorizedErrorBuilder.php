<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<UnauthorizedError>
 */
final class UnauthorizedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?array
     */
    private $storesWithoutPermission;

    /**
     * <p><code>&quot;Customer reference expansion not permitted on my business unit&quot;</code> or <code>&quot;Not allowed to edit this CartDiscount.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Keys of <a href="ctp:api:type:Store">Stores</a> for which the required permission to modify is missing.</p>
     * <p>This field is returned only for <a href="ctp:api:type:CartDiscount">Cart Discounts</a>.</p>
     *

     * @return null|array
     */
    public function getStoresWithoutPermission()
    {
        return $this->storesWithoutPermission;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?array $storesWithoutPermission
     * @return $this
     */
    public function withStoresWithoutPermission(?array $storesWithoutPermission)
    {
        $this->storesWithoutPermission = $storesWithoutPermission;

        return $this;
    }


    public function build(): UnauthorizedError
    {
        return new UnauthorizedErrorModel(
            $this->message,
            $this->storesWithoutPermission
        );
    }

    public static function of(): UnauthorizedErrorBuilder
    {
        return new self();
    }
}
